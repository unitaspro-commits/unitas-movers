<?php

namespace App\Http\Controllers;

use App\Models\Route as MovingRoute;
use App\Services\InternalLinkService;
use App\Services\SchemaMarkupService;

class RouteController extends Controller
{
    public function index(SchemaMarkupService $schema)
    {
        $routes = MovingRoute::published()->ordered()->get();
        $schemas = $schema->forIndexPage('Routes', route('routes.index'), 'routes-index');

        return view('routes.index', compact('routes', 'schemas'));
    }

    public function show(MovingRoute $route, SchemaMarkupService $schema, InternalLinkService $links)
    {
        abort_unless($route->is_published, 404);

        $schemas = $schema->forRouteShow($route);
        $relatedPages = $links->forRoute($route);

        return view('routes.show', compact('route', 'schemas', 'relatedPages'));
    }
}
