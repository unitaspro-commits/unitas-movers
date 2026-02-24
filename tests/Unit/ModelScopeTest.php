<?php

namespace Tests\Unit;

use App\Enums\MoveSize;
use App\Enums\QuoteStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreatesTestData;

class ModelScopeTest extends TestCase
{
    use RefreshDatabase, CreatesTestData;

    // ── Service Scopes ────────────────────────────────────────

    public function test_service_published_scope(): void
    {
        $this->createService(['is_published' => true]);
        $this->createService(['is_published' => false]);

        $this->assertCount(1, \App\Models\Service::published()->get());
    }

    public function test_service_ordered_scope(): void
    {
        $this->createService(['sort_order' => 3, 'name' => 'Third']);
        $this->createService(['sort_order' => 1, 'name' => 'First']);

        $services = \App\Models\Service::ordered()->get();
        $this->assertEquals('First', $services->first()->name);
    }

    // ── Area Scopes ───────────────────────────────────────────

    public function test_area_published_scope(): void
    {
        $this->createArea(['is_published' => true]);
        $this->createArea(['is_published' => false]);

        $this->assertCount(1, \App\Models\Area::published()->get());
    }

    public function test_area_of_type_scope(): void
    {
        $this->createArea(['area_type' => 'quadrant']);
        $this->createArea(['area_type' => 'neighborhood']);
        $this->createArea(['area_type' => 'town']);

        $this->assertCount(1, \App\Models\Area::ofType('quadrant')->get());
        $this->assertCount(1, \App\Models\Area::ofType('town')->get());
    }

    // ── Route Scopes ──────────────────────────────────────────

    public function test_route_published_scope(): void
    {
        $this->createRoute(['is_published' => true]);
        $this->createRoute(['is_published' => false]);

        $this->assertCount(1, \App\Models\Route::published()->get());
    }

    // ── BlogPost Scopes ───────────────────────────────────────

    public function test_blog_post_published_scope(): void
    {
        $this->createBlogPost(['published_at' => now()->subDay()]);
        $this->createBlogPost(['published_at' => now()->addMonth()]);
        $this->createBlogPost(['published_at' => null]);

        $this->assertCount(1, \App\Models\BlogPost::published()->get());
    }

    public function test_blog_post_of_category_scope(): void
    {
        $this->createBlogPost(['category' => 'guides']);
        $this->createBlogPost(['category' => 'tips']);
        $this->createBlogPost(['category' => 'guides']);

        $this->assertCount(2, \App\Models\BlogPost::ofCategory('guides')->get());
    }

    // ── Review Scopes ─────────────────────────────────────────

    public function test_review_published_scope(): void
    {
        $this->createReview(['is_published' => true]);
        $this->createReview(['is_published' => false]);

        $this->assertCount(1, \App\Models\Review::published()->get());
    }

    public function test_review_featured_scope(): void
    {
        $this->createReview(['is_featured' => true]);
        $this->createReview(['is_featured' => false]);

        $this->assertCount(1, \App\Models\Review::featured()->get());
    }

    // ── FAQ Scopes ────────────────────────────────────────────

    public function test_faq_published_scope(): void
    {
        $this->createFaq(['is_published' => true]);
        $this->createFaq(['is_published' => false]);

        $this->assertCount(1, \App\Models\Faq::published()->get());
    }

    public function test_faq_of_category_scope(): void
    {
        $this->createFaq(['category' => 'general']);
        $this->createFaq(['category' => 'pricing']);

        $this->assertCount(1, \App\Models\Faq::ofCategory('general')->get());
    }

    public function test_faq_schema_eligible_scope(): void
    {
        $this->createFaq(['schema_eligible' => true]);
        $this->createFaq(['schema_eligible' => false]);

        $this->assertCount(1, \App\Models\Faq::schemaEligible()->get());
    }

    // ── Quote Scopes ──────────────────────────────────────────

    public function test_quote_new_scope(): void
    {
        $this->createQuote(['status' => QuoteStatus::New->value]);
        $this->createQuote(['status' => QuoteStatus::Contacted->value]);

        $this->assertCount(1, \App\Models\Quote::new()->get());
    }

    public function test_quote_active_scope(): void
    {
        $this->createQuote(['status' => QuoteStatus::New->value]);
        $this->createQuote(['status' => QuoteStatus::Booked->value]);
        $this->createQuote(['status' => QuoteStatus::Completed->value]);
        $this->createQuote(['status' => QuoteStatus::Cancelled->value]);

        $this->assertCount(2, \App\Models\Quote::active()->get());
    }
}
