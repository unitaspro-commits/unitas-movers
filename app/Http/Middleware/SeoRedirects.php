<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SeoRedirects
{
    /**
     * Handles three SEO-critical URL normalizations:
     * 1. Remove trailing slashes (301 redirect)
     * 2. Force lowercase URLs (301 redirect)
     * 3. Add canonical Link header
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->getPathInfo();

        // Skip for root path, admin, livewire, and non-GET requests
        if ($path === '/' || $request->is('admin/*', 'livewire/*', 'api/*') || ! $request->isMethod('GET')) {
            return $next($request);
        }

        // 1. Remove trailing slash: /services/packing/ → /services/packing
        if (str_ends_with($path, '/')) {
            $cleanPath = rtrim($path, '/');
            $query = $request->getQueryString();
            $url = $request->getSchemeAndHttpHost() . $cleanPath . ($query ? '?' . $query : '');

            return redirect($url, 301);
        }

        // 2. Force lowercase: /Services/Packing → /services/packing
        $lowered = strtolower($path);
        if ($path !== $lowered) {
            $query = $request->getQueryString();
            $url = $request->getSchemeAndHttpHost() . $lowered . ($query ? '?' . $query : '');

            return redirect($url, 301);
        }

        $response = $next($request);

        // 3. Add canonical Link header (supplements the <link rel="canonical"> in HTML)
        if ($response instanceof \Illuminate\Http\Response && $request->isMethod('GET')) {
            $canonical = $request->getSchemeAndHttpHost() . $path;
            $response->header('Link', '<' . $canonical . '>; rel="canonical"');
        }

        return $response;
    }
}
