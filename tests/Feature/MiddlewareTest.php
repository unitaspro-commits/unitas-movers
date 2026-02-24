<?php

namespace Tests\Feature;

use App\Http\Middleware\HandleRedirects;
use App\Http\Middleware\SeoRedirects;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tests\TestCase;
use Tests\Traits\CreatesTestData;

class MiddlewareTest extends TestCase
{
    use RefreshDatabase, CreatesTestData;

    // ── Trailing Slash Redirect (direct middleware test) ──────

    public function test_trailing_slash_redirects_to_clean_url(): void
    {
        $middleware = new SeoRedirects;
        $request = Request::create('http://localhost/about/', 'GET');

        $response = $middleware->handle($request, fn () => new Response('OK'));

        $this->assertEquals(301, $response->getStatusCode());
        $this->assertStringEndsWith('/about', $response->headers->get('Location'));
    }

    public function test_trailing_slash_preserves_query_string(): void
    {
        $middleware = new SeoRedirects;
        $request = Request::create('http://localhost/services/?page=2', 'GET');

        $response = $middleware->handle($request, fn () => new Response('OK'));

        $this->assertEquals(301, $response->getStatusCode());
        $this->assertStringContainsString('/services?page=2', $response->headers->get('Location'));
    }

    public function test_root_path_not_redirected(): void
    {
        $this->get('/')->assertOk();
    }

    // ── Lowercase URL Redirect (direct middleware test) ──────

    public function test_uppercase_url_redirects_to_lowercase(): void
    {
        $middleware = new SeoRedirects;
        $request = Request::create('http://localhost/About', 'GET');

        $response = $middleware->handle($request, fn () => new Response('OK'));

        $this->assertEquals(301, $response->getStatusCode());
        $this->assertStringEndsWith('/about', $response->headers->get('Location'));
    }

    public function test_mixed_case_redirects_to_lowercase(): void
    {
        $middleware = new SeoRedirects;
        $request = Request::create('http://localhost/Services/Local-Moving', 'GET');

        $response = $middleware->handle($request, fn () => new Response('OK'));

        $this->assertEquals(301, $response->getStatusCode());
        $this->assertStringEndsWith('/services/local-moving', $response->headers->get('Location'));
    }

    public function test_seo_redirects_skips_admin_routes(): void
    {
        $middleware = new SeoRedirects;
        $request = Request::create('http://localhost/admin/Dashboard', 'GET');

        $response = $middleware->handle($request, fn () => new Response('OK'));

        $this->assertEquals(200, $response->getStatusCode());
    }

    // ── Database Redirects (direct middleware test) ───────────

    public function test_db_redirect_performs_301(): void
    {
        $this->createRedirect([
            'from_path' => '/old-page',
            'to_path' => '/about',
            'status_code' => 301,
        ]);

        $middleware = new HandleRedirects;
        $request = Request::create('http://localhost/old-page', 'GET');

        $response = $middleware->handle($request, fn () => new Response('OK'));

        $this->assertEquals(301, $response->getStatusCode());
        $this->assertStringContainsString('/about', $response->headers->get('Location'));
    }

    public function test_db_redirect_performs_302(): void
    {
        $this->createRedirect([
            'from_path' => '/temp-page',
            'to_path' => '/pricing',
            'status_code' => 302,
        ]);

        $middleware = new HandleRedirects;
        $request = Request::create('http://localhost/temp-page', 'GET');

        $response = $middleware->handle($request, fn () => new Response('OK'));

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertStringContainsString('/pricing', $response->headers->get('Location'));
    }

    public function test_db_redirect_increments_hit_count(): void
    {
        $redirect = $this->createRedirect([
            'from_path' => '/counted-page',
            'to_path' => '/about',
            'status_code' => 301,
            'hit_count' => 0,
        ]);

        $middleware = new HandleRedirects;
        $request = Request::create('http://localhost/counted-page', 'GET');

        $middleware->handle($request, fn () => new Response('OK'));

        $redirect->refresh();
        $this->assertEquals(1, $redirect->hit_count);
    }
}
