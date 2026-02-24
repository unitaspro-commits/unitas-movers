<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreatesTestData;

class PageResponseTest extends TestCase
{
    use RefreshDatabase, CreatesTestData;

    // ── Static Pages ──────────────────────────────────────────

    public function test_homepage_returns_200(): void
    {
        $this->get('/')->assertOk();
    }

    public function test_about_page_returns_200(): void
    {
        $this->get('/about')->assertOk();
    }

    public function test_licensed_insured_page_returns_200(): void
    {
        $this->get('/about/licensed-insured')->assertOk();
    }

    public function test_pricing_page_returns_200(): void
    {
        $this->get('/pricing')->assertOk();
    }

    public function test_reviews_page_returns_200(): void
    {
        $this->get('/reviews')->assertOk();
    }

    public function test_faq_page_returns_200(): void
    {
        $this->get('/faq')->assertOk();
    }

    public function test_contact_page_returns_200(): void
    {
        $this->get('/contact')->assertOk();
    }

    public function test_site_map_page_returns_200(): void
    {
        $this->get('/site-map')->assertOk();
    }

    public function test_privacy_policy_returns_200(): void
    {
        $this->get('/privacy-policy')->assertOk();
    }

    public function test_terms_of_service_returns_200(): void
    {
        $this->get('/terms-of-service')->assertOk();
    }

    public function test_health_check_returns_200(): void
    {
        $this->get('/up')->assertOk();
    }

    // ── Quote Form ────────────────────────────────────────────

    public function test_quote_form_returns_200(): void
    {
        $this->get('/get-a-quote')->assertOk();
    }

    // ── Index Pages ───────────────────────────────────────────

    public function test_services_index_returns_200(): void
    {
        $this->get('/services')->assertOk();
    }

    public function test_areas_index_returns_200(): void
    {
        $this->get('/areas')->assertOk();
    }

    public function test_routes_index_returns_200(): void
    {
        $this->get('/routes')->assertOk();
    }

    public function test_blog_index_returns_200(): void
    {
        $this->get('/blog')->assertOk();
    }

    // ── Detail Pages (published) ──────────────────────────────

    public function test_published_service_returns_200(): void
    {
        $service = $this->createService(['slug' => 'test-moving']);
        $this->get('/services/test-moving')->assertOk();
    }

    public function test_published_area_returns_200(): void
    {
        $area = $this->createArea(['slug' => 'test-neighbourhood']);
        $this->get('/areas/test-neighbourhood')->assertOk();
    }

    public function test_published_route_returns_200(): void
    {
        $route = $this->createRoute(['slug' => 'calgary-to-test']);
        $this->get('/routes/calgary-to-test')->assertOk();
    }

    public function test_published_blog_post_returns_200(): void
    {
        $post = $this->createBlogPost(['slug' => 'test-blog-post']);
        $this->get('/blog/test-blog-post')->assertOk();
    }

    // ── Unpublished Content Returns 404 ───────────────────────

    public function test_unpublished_service_returns_404(): void
    {
        $this->createService(['slug' => 'hidden-service', 'is_published' => false]);
        $this->get('/services/hidden-service')->assertNotFound();
    }

    public function test_unpublished_area_returns_404(): void
    {
        $this->createArea(['slug' => 'hidden-area', 'is_published' => false]);
        $this->get('/areas/hidden-area')->assertNotFound();
    }

    public function test_unpublished_route_returns_404(): void
    {
        $this->createRoute(['slug' => 'hidden-route', 'is_published' => false]);
        $this->get('/routes/hidden-route')->assertNotFound();
    }

    public function test_future_blog_post_returns_404(): void
    {
        $this->createBlogPost(['slug' => 'future-post', 'published_at' => now()->addMonth()]);
        $this->get('/blog/future-post')->assertNotFound();
    }

    public function test_null_published_at_blog_post_returns_404(): void
    {
        $this->createBlogPost(['slug' => 'draft-post', 'published_at' => null]);
        $this->get('/blog/draft-post')->assertNotFound();
    }

    // ── Non-existent slugs return 404 ─────────────────────────

    public function test_nonexistent_service_returns_404(): void
    {
        $this->get('/services/does-not-exist')->assertNotFound();
    }

    public function test_nonexistent_blog_returns_404(): void
    {
        $this->get('/blog/does-not-exist')->assertNotFound();
    }
}
