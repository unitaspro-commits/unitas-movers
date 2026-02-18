<?php

namespace App\Http\Controllers;

use App\Models\Area;
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
        $schemas = $schema->forIndexPage('Areas', route('areas.index'));

        return view('areas.index', compact('areas', 'quadrants', 'neighborhoods', 'towns', 'schemas'));
    }

    public function show(Area $area, SchemaMarkupService $schema, InternalLinkService $links)
    {
        abort_unless($area->is_published, 404);

        $area->load('children', 'parent');
        $schemas = $schema->forAreaShow($area);
        $relatedPages = $links->forArea($area);

        return view('areas.show', compact('area', 'schemas', 'relatedPages'));
    }
}
