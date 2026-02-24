<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreatesTestData;

class SitemapTest extends TestCase
{
    use RefreshDatabase, CreatesTestData;

    public function test_sitemap_returns_200(): void
    {
        $this->get('/sitemap.xml')->assertOk();
    }

    public function test_sitemap_returns_xml_content_type(): void
    {
        $response = $this->get('/sitemap.xml');
        $response->assertHeader('Content-Type', 'text/xml; charset=UTF-8');
    }

    public function test_sitemap_is_valid_xml(): void
    {
        $response = $this->get('/sitemap.xml');
        $xml = simplexml_load_string($response->getContent());
        $this->assertNotFalse($xml);
    }

    public function test_sitemap_contains_static_pages(): void
    {
        $response = $this->get('/sitemap.xml');
        $content = $response->getContent();
        $this->assertStringContainsString('/services', $content);
        $this->assertStringContainsString('/areas', $content);
        $this->assertStringContainsString('/blog', $content);
        $this->assertStringContainsString('/get-a-quote', $content);
    }

    public function test_sitemap_contains_published_slugs(): void
    {
        $this->createService(['slug' => 'sitemap-service']);
        $this->createBlogPost(['slug' => 'sitemap-blog-post']);

        $response = $this->get('/sitemap.xml');
        $content = $response->getContent();
        $this->assertStringContainsString('/services/sitemap-service', $content);
        $this->assertStringContainsString('/blog/sitemap-blog-post', $content);
    }

    public function test_sitemap_excludes_unpublished_content(): void
    {
        $this->createService(['slug' => 'hidden-sitemap', 'is_published' => false]);
        $this->createBlogPost(['slug' => 'draft-sitemap', 'published_at' => null]);

        $response = $this->get('/sitemap.xml');
        $content = $response->getContent();
        $this->assertStringNotContainsString('/services/hidden-sitemap', $content);
        $this->assertStringNotContainsString('/blog/draft-sitemap', $content);
    }
}
