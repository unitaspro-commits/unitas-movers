<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\BlogPost;
use App\Models\Route as RouteModel;
use App\Models\Service;

class SitemapController extends Controller
{
    public function __invoke()
    {
        $services = Service::published()->ordered()->get(['slug', 'updated_at']);
        $areas = Area::published()->ordered()->get(['slug', 'updated_at']);
        $routes = RouteModel::published()->ordered()->get(['slug', 'updated_at']);
        $blogPosts = BlogPost::published()->latest('published_at')->get(['slug', 'updated_at']);

        return response()
            ->view('sitemap', compact('services', 'areas', 'routes', 'blogPosts'))
            ->header('Content-Type', 'text/xml');
    }
}
