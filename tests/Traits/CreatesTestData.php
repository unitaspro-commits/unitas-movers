<?php

namespace Tests\Traits;

use App\Enums\MoveSize;
use App\Enums\QuoteStatus;
use App\Models\Area;
use App\Models\BlogPost;
use App\Models\Faq;
use App\Models\Quote;
use App\Models\Redirect;
use App\Models\Review;
use App\Models\Route as MovingRoute;
use App\Models\Service;

trait CreatesTestData
{
    protected function createService(array $overrides = []): Service
    {
        return Service::create(array_merge([
            'slug' => 'test-service-' . uniqid(),
            'name' => 'Test Service',
            'meta_title' => 'Test Service | Unitas Movers',
            'meta_description' => 'Test service description for SEO.',
            'h1' => 'Test Service',
            'hero_text' => 'Hero text for test service.',
            'body' => '<p>Test service body content.</p>',
            'is_published' => true,
            'sort_order' => 1,
        ], $overrides));
    }

    protected function createArea(array $overrides = []): Area
    {
        return Area::create(array_merge([
            'slug' => 'test-area-' . uniqid(),
            'name' => 'Test Area',
            'area_type' => 'neighborhood',
            'meta_title' => 'Test Area | Unitas Movers',
            'meta_description' => 'Test area description.',
            'h1' => 'Test Area Moving',
            'body' => '<p>Test area body content.</p>',
            'avg_home_price' => 500000,
            'dominant_housing_type' => 'Single-family detached',
            'parking_restrictions' => 'Unrestricted residential parking.',
            'elevator_booking_required' => false,
            'access_notes' => 'Standard suburban access with wide streets.',
            'nearby_landmarks' => 'Community park, local shopping centre',
            'move_complexity' => 'easy',
            'avg_move_cost_2bed' => 400,
            'walkability_notes' => 'Car-dependent suburb with local amenities.',
            'is_published' => true,
            'sort_order' => 1,
        ], $overrides));
    }

    protected function createRoute(array $overrides = []): MovingRoute
    {
        return MovingRoute::create(array_merge([
            'slug' => 'test-route-' . uniqid(),
            'origin_city' => 'Calgary',
            'dest_city' => 'Edmonton',
            'distance_km' => 300,
            'drive_time_hours' => 3.0,
            'price_range_min' => 800,
            'price_range_max' => 1500,
            'meta_title' => 'Calgary to Edmonton | Unitas Movers',
            'meta_description' => 'Moving from Calgary to Edmonton.',
            'h1' => 'Calgary to Edmonton Moving',
            'route_overview' => '<p>Route overview content.</p>',
            'highway_name' => 'Queen Elizabeth II Highway (Highway 2)',
            'highway_number' => 'Highway 2',
            'seasonal_tips' => 'Winter moves may encounter snow on Highway 2.',
            'fuel_cost_estimate' => 120,
            'popular_move_months' => 'Peak: Jun-Aug, Value: Oct-Feb',
            'origin_housing_data' => ['avg_price' => '$540,000', 'dominant_type' => 'Single-family detached', 'avg_sqft' => '1,150'],
            'dest_housing_data' => ['avg_price' => '$380,000', 'dominant_type' => 'Single-family detached', 'avg_sqft' => '1,050'],
            'road_conditions_note' => 'Highway 2 is a divided 4-lane highway in excellent condition.',
            'notable_stops' => 'Airdrie, Red Deer, Leduc',
            'backhaul_discount' => true,
            'elevation_change' => '1,045m → 668m (descending)',
            'is_published' => true,
            'sort_order' => 1,
        ], $overrides));
    }

    protected function createBlogPost(array $overrides = []): BlogPost
    {
        return BlogPost::create(array_merge([
            'slug' => 'test-post-' . uniqid(),
            'title' => 'Test Blog Post',
            'meta_title' => 'Test Blog Post | Unitas Movers',
            'meta_description' => 'Test blog post description.',
            'excerpt' => 'A test blog post excerpt.',
            'body' => '<p>Test blog post body content.</p>',
            'category' => 'guides',
            'target_keyword' => 'test keyword',
            'published_at' => now()->subDay(),
            'is_pillar' => false,
        ], $overrides));
    }

    protected function createReview(array $overrides = []): Review
    {
        return Review::create(array_merge([
            'customer_name' => 'John Doe',
            'rating' => 5,
            'body' => 'Great moving service!',
            'is_featured' => false,
            'is_published' => true,
        ], $overrides));
    }

    protected function createFaq(array $overrides = []): Faq
    {
        return Faq::create(array_merge([
            'question' => 'How much does moving cost?',
            'answer' => 'Moving costs vary depending on the size.',
            'category' => 'general',
            'sort_order' => 1,
            'schema_eligible' => true,
            'is_published' => true,
        ], $overrides));
    }

    protected function createQuote(array $overrides = []): Quote
    {
        return Quote::create(array_merge([
            'full_name' => 'Jane Smith',
            'phone' => '(403) 555-1234',
            'email' => 'jane@example.com',
            'moving_from' => '123 Main St, Calgary, AB',
            'moving_to' => '456 Oak Ave, Edmonton, AB',
            'move_date' => now()->addDays(14)->format('Y-m-d'),
            'move_size' => MoveSize::TwoBedroom->value,
            'services_needed' => ['moving', 'packing'],
            'status' => QuoteStatus::New->value,
        ], $overrides));
    }

    protected function createRedirect(array $overrides = []): Redirect
    {
        return Redirect::create(array_merge([
            'from_path' => '/old-page-' . uniqid(),
            'to_path' => '/new-page',
            'status_code' => 301,
            'hit_count' => 0,
        ], $overrides));
    }

    protected function validQuoteData(array $overrides = []): array
    {
        return array_merge([
            'full_name' => 'Jane Smith',
            'phone' => '(403) 991-3206',
            'email' => 'jane@example.com',
            'moving_from' => '123 Main St, Calgary, AB',
            'moving_to' => '456 Oak Ave, Edmonton, AB',
            'move_date' => now()->addDays(14)->format('Y-m-d'),
            'move_size' => 'home',
            'services_needed' => ['moving', 'packing'],
        ], $overrides);
    }
}
