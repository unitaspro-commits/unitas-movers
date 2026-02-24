<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreatesTestData;

class SeoTest extends TestCase
{
    use RefreshDatabase, CreatesTestData;

    // ── Homepage SEO ──────────────────────────────────────────

    public function test_homepage_has_title_tag(): void
    {
        $response = $this->get('/');
        $response->assertOk();
        $response->assertSee('<title>', false);
    }

    public function test_homepage_has_meta_description(): void
    {
        $this->get('/')
            ->assertSee('name="description"', false);
    }

    public function test_homepage_has_canonical_url(): void
    {
        $this->get('/')
            ->assertSee('rel="canonical"', false);
    }

    public function test_homepage_has_og_tags(): void
    {
        $response = $this->get('/');
        $response->assertSee('property="og:title"', false);
        $response->assertSee('property="og:description"', false);
    }

    public function test_homepage_has_moving_company_schema(): void
    {
        $this->get('/')
            ->assertSee('MovingCompany', false);
    }

    // ── Phone Number ──────────────────────────────────────────

    public function test_homepage_shows_phone_number(): void
    {
        $this->get('/')
            ->assertSee('(403) 991-3206');
    }

    public function test_contact_page_shows_phone_number(): void
    {
        $this->get('/contact')
            ->assertSee('(403) 991-3206');
    }

    // ── Detail Page Schema ────────────────────────────────────

    public function test_blog_post_has_blog_posting_schema(): void
    {
        $this->createBlogPost(['slug' => 'seo-test-post']);
        $this->get('/blog/seo-test-post')
            ->assertSee('BlogPosting', false);
    }

    public function test_faq_page_has_faq_schema(): void
    {
        $this->createFaq();
        $this->get('/faq')
            ->assertSee('FAQPage', false);
    }

    public function test_detail_pages_have_breadcrumb_schema(): void
    {
        $this->createService(['slug' => 'breadcrumb-test']);
        $this->get('/services/breadcrumb-test')
            ->assertSee('BreadcrumbList', false);
    }
}
