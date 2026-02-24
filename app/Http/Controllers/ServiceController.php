<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Review;
use App\Models\Service;
use App\Services\InternalLinkService;
use App\Services\SchemaMarkupService;

class ServiceController extends Controller
{
    public function index(SchemaMarkupService $schema)
    {
        $services = Service::published()->ordered()->get();
        $schemas = $schema->forIndexPage('Services', route('services.index'), 'services-index');

        return view('services.index', compact('services', 'schemas'));
    }

    public function show(Service $service, SchemaMarkupService $schema, InternalLinkService $links)
    {
        abort_unless($service->is_published, 404);

        $schemas = $schema->forServiceShow($service);
        $relatedPages = $links->forService($service);

        // Reviews linked to this service (or general reviews if none specific)
        $reviews = Review::published()
            ->where('service_id', $service->id)
            ->latest()
            ->take(3)
            ->get();
        if ($reviews->isEmpty()) {
            $reviews = Review::published()->where('rating', '>=', 4)->inRandomOrder()->take(3)->get();
        }

        // Areas served — quadrants + top towns for internal linking
        $areasServed = Area::published()
            ->whereIn('area_type', ['quadrant', 'town'])
            ->ordered()
            ->take(15)
            ->get();

        // Related services for sidebar
        $relatedServices = Service::published()
            ->where('id', '!=', $service->id)
            ->orderByRaw('ABS(sort_order - ?) ASC', [$service->sort_order])
            ->take(5)
            ->get();

        return view('services.show', compact(
            'service', 'schemas', 'relatedPages', 'reviews', 'areasServed', 'relatedServices'
        ));
    }
}
