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

        // Services available in this area
        $services = Service::published()->ordered()->take(8)->get();

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
}
