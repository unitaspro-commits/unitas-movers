<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Review;
use App\Models\Service;
use App\Services\InternalLinkService;
use App\Services\SchemaMarkupService;

class AreaController extends Controller
{
    public function index(SchemaMarkupService $schema)
    {
        $areas = Area::published()->ordered()->get();
        $quadrants = $areas->where('area_type', 'quadrant');
        $neighborhoods = $areas->where('area_type', 'neighborhood');
        $towns = $areas->where('area_type', 'town');
        $schemas = $schema->forIndexPage('Areas', route('areas.index'), 'areas-index');

        return view('areas.index', compact('areas', 'quadrants', 'neighborhoods', 'towns', 'schemas'));
    }

    public function show(Area $area, SchemaMarkupService $schema, InternalLinkService $links)
    {
        abort_unless($area->is_published, 404);

        $area->load('children', 'parent');
        $schemas = $schema->forAreaShow($area);
        $relatedPages = $links->forArea($area);

        // Area-type-specific service selection
        $services = $this->servicesForArea($area);

        // Reviews linked to this area (or general if none)
        $reviews = Review::published()
            ->where('area_id', $area->id)
            ->latest()
            ->take(3)
            ->get();
        if ($reviews->isEmpty()) {
            $reviews = Review::published()->where('rating', '>=', 4)->inRandomOrder()->take(2)->get();
        }

        return view('areas.show', compact('area', 'schemas', 'relatedPages', 'services', 'reviews'));
    }

    private function servicesForArea(Area $area)
    {
        $prioritySlugs = match (true) {
            // Condo-heavy areas: apartment, condo, and packing services first
            $area->elevator_booking_required => [
                'apartment-moving', 'condo-moving', 'packing-services',
                'furniture-assembly', 'residential-moving', 'local-moving',
                'senior-moving', 'storage-solutions',
            ],
            // Hard-complexity areas: residential, packing, piano, specialty
            $area->move_complexity === 'hard' => [
                'residential-moving', 'packing-services', 'piano-moving',
                'furniture-assembly', 'apartment-moving', 'local-moving',
                'senior-moving', 'storage-solutions',
            ],
            // Towns: long-distance, residential, storage
            $area->area_type === 'town' => [
                'long-distance-moving', 'residential-moving', 'storage-solutions',
                'packing-services', 'furniture-assembly', 'commercial-moving',
                'senior-moving', 'local-moving',
            ],
            // Default fallback
            default => [],
        };

        if (empty($prioritySlugs)) {
            return Service::published()->ordered()->take(8)->get();
        }

        // Get priority services in the specified order
        $priority = Service::published()->whereIn('slug', $prioritySlugs)->get()
            ->sortBy(fn ($s) => array_search($s->slug, $prioritySlugs));

        // Fill remaining spots with other services
        $remaining = Service::published()->ordered()
            ->whereNotIn('slug', $prioritySlugs)
            ->take(8 - $priority->count())
            ->get();

        return $priority->concat($remaining)->take(8);
    }
}
