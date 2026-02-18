<?php

namespace App\Http\Middleware;

use App\Models\Redirect;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class HandleRedirects
{
    public function handle(Request $request, Closure $next): Response
    {
        $path = '/' . ltrim($request->path(), '/');

        $redirects = Cache::rememberForever('redirects', function () {
            return Redirect::all()
                ->keyBy('from_path')
                ->map(fn ($r) => [
                    'id' => $r->id,
                    'to_path' => $r->to_path,
                    'status_code' => $r->status_code,
                ])
                ->toArray();
        });

        if (isset($redirects[$path])) {
            $match = $redirects[$path];

            // Record hit asynchronously — doesn't block the redirect
            Redirect::where('id', $match['id'])->update([
                'hit_count' => \DB::raw('hit_count + 1'),
                'last_hit_at' => now(),
            ]);

            return redirect($match['to_path'], $match['status_code']);
        }

        return $next($request);
    }
}
