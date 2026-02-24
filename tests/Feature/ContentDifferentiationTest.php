<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreatesTestData;

class ContentDifferentiationTest extends TestCase
{
    use RefreshDatabase, CreatesTestData;

    // ── Route Page Tests ──────────────────────────────────

    public function test_route_page_displays_highway_name(): void
    {
        $route = $this->createRoute(['highway_name' => 'Trans-Canada Highway (Highway 1)']);

        $response = $this->get(route('routes.show', $route));

        $response->assertStatus(200);
        $response->assertSee('Trans-Canada Highway (Highway 1)');
    }

    public function test_route_page_displays_fuel_estimate(): void
    {
        $route = $this->createRoute(['fuel_cost_estimate' => 120]);

        $response = $this->get(route('routes.show', $route));

        $response->assertStatus(200);
        $response->assertSee('$120');
    }

    public function test_route_page_displays_housing_comparison(): void
    {
        $route = $this->createRoute([
            'origin_housing_data' => ['avg_price' => '$540,000', 'dominant_type' => 'Single-family detached', 'avg_sqft' => '1,150'],
            'dest_housing_data' => ['avg_price' => '$380,000', 'dominant_type' => 'Single-family detached', 'avg_sqft' => '1,050'],
        ]);

        $response = $this->get(route('routes.show', $route));

        $response->assertStatus(200);
        $response->assertSee('Housing Comparison');
        $response->assertSee('$540,000');
        $response->assertSee('$380,000');
    }

    public function test_route_page_displays_seasonal_tips(): void
    {
        $route = $this->createRoute(['seasonal_tips' => 'Winter tires mandatory Oct-Apr.']);

        $response = $this->get(route('routes.show', $route));

        $response->assertStatus(200);
        $response->assertSee('Winter tires mandatory Oct-Apr.');
    }

    public function test_route_page_displays_notable_stops(): void
    {
        $route = $this->createRoute(['notable_stops' => 'Airdrie, Red Deer, Leduc']);

        $response = $this->get(route('routes.show', $route));

        $response->assertStatus(200);
        $response->assertSee('Airdrie, Red Deer, Leduc');
    }

    public function test_route_page_displays_backhaul_discount(): void
    {
        $route = $this->createRoute(['backhaul_discount' => true]);

        $response = $this->get(route('routes.show', $route));

        $response->assertStatus(200);
        $response->assertSee('Backhaul discount may be available');
    }

    public function test_route_page_hides_sections_when_data_absent(): void
    {
        $route = $this->createRoute([
            'highway_name' => null,
            'seasonal_tips' => null,
            'notable_stops' => null,
            'origin_housing_data' => null,
            'dest_housing_data' => null,
            'road_conditions_note' => null,
            'backhaul_discount' => false,
        ]);

        $response = $this->get(route('routes.show', $route));

        $response->assertStatus(200);
        $response->assertDontSee('Route &amp; Road Information');
        $response->assertDontSee('Seasonal Moving Tips');
        $response->assertDontSee('Communities Along the Way');
        $response->assertDontSee('Housing Comparison');
        $response->assertDontSee('Backhaul discount');
    }

    // ── Area Page Tests ───────────────────────────────────

    public function test_area_page_displays_move_complexity(): void
    {
        $this->createService();
        $area = $this->createArea(['move_complexity' => 'hard']);

        $response = $this->get(route('areas.show', $area));

        $response->assertStatus(200);
        $response->assertSee('Hard');
    }

    public function test_area_page_displays_parking_info(): void
    {
        $this->createService();
        $area = $this->createArea(['parking_restrictions' => 'Metered parking on main streets.']);

        $response = $this->get(route('areas.show', $area));

        $response->assertStatus(200);
        $response->assertSee('Metered parking on main streets.');
    }

    public function test_area_page_displays_elevator_notice(): void
    {
        $this->createService();
        $area = $this->createArea(['elevator_booking_required' => true]);

        $response = $this->get(route('areas.show', $area));

        $response->assertStatus(200);
        $response->assertSee('Elevator Booking Required');
    }

    public function test_area_page_displays_formatted_home_price(): void
    {
        $this->createService();
        $area = $this->createArea(['avg_home_price' => 650000]);

        $response = $this->get(route('areas.show', $area));

        $response->assertStatus(200);
        $response->assertSee('$650,000');
    }

    public function test_area_page_displays_nearby_landmarks(): void
    {
        $this->createService();
        $area = $this->createArea(['nearby_landmarks' => 'Fish Creek Park, Southcentre Mall']);

        $response = $this->get(route('areas.show', $area));

        $response->assertStatus(200);
        $response->assertSee('Fish Creek Park, Southcentre Mall');
    }

    public function test_area_page_displays_walkability(): void
    {
        $this->createService();
        $area = $this->createArea(['walkability_notes' => 'Walk Score 90+. Excellent transit access.']);

        $response = $this->get(route('areas.show', $area));

        $response->assertStatus(200);
        $response->assertSee('Walk Score 90+. Excellent transit access.');
    }

    public function test_area_page_hides_sections_when_data_absent(): void
    {
        $this->createService();
        $area = $this->createArea([
            'avg_home_price' => null,
            'avg_move_cost_2bed' => null,
            'dominant_housing_type' => null,
            'move_complexity' => null,
            'parking_restrictions' => null,
            'elevator_booking_required' => false,
            'access_notes' => null,
            'nearby_landmarks' => null,
            'walkability_notes' => null,
        ]);

        $response = $this->get(route('areas.show', $area));

        $response->assertStatus(200);
        $response->assertDontSee('Area at a Glance');
        $response->assertDontSee('Moving Day Logistics');
        $response->assertDontSee('Nearby Landmarks');
        $response->assertDontSee('Getting Around');
    }

    // ── Model Accessor Tests ──────────────────────────────

    public function test_area_formatted_home_price_accessor(): void
    {
        $area = $this->createArea(['avg_home_price' => 500000]);
        $this->assertEquals('$500,000', $area->formatted_home_price);
    }

    public function test_area_formatted_home_price_returns_na_when_null(): void
    {
        $area = $this->createArea(['avg_home_price' => null]);
        $this->assertEquals('N/A', $area->formatted_home_price);
    }

    public function test_area_complexity_label_accessor(): void
    {
        $easy = $this->createArea(['move_complexity' => 'easy']);
        $medium = $this->createArea(['move_complexity' => 'medium']);
        $hard = $this->createArea(['move_complexity' => 'hard']);

        $this->assertEquals('Easy', $easy->complexity_label);
        $this->assertEquals('Medium', $medium->complexity_label);
        $this->assertEquals('Hard', $hard->complexity_label);
    }

    public function test_route_fuel_estimate_display_accessor(): void
    {
        $route = $this->createRoute(['fuel_cost_estimate' => 250]);
        $this->assertEquals('$250', $route->fuel_estimate_display);
    }

    public function test_route_fuel_estimate_display_returns_na_when_null(): void
    {
        $route = $this->createRoute(['fuel_cost_estimate' => null]);
        $this->assertEquals('N/A', $route->fuel_estimate_display);
    }
}
