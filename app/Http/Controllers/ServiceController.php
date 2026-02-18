<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\InternalLinkService;
use App\Services\SchemaMarkupService;

class ServiceController extends Controller
{
    public function index(SchemaMarkupService $schema)
    {
        $services = Service::published()->ordered()->get();
        $schemas = $schema->forIndexPage('Services', route('services.index'));

        return view('services.index', compact('services', 'schemas'));
    }

    public function show(Service $service, SchemaMarkupService $schema, InternalLinkService $links)
    {
        abort_unless($service->is_published, 404);

        $schemas = $schema->forServiceShow($service);
        $relatedPages = $links->forService($service);

        return view('services.show', compact('service', 'schemas', 'relatedPages'));
    }
}
