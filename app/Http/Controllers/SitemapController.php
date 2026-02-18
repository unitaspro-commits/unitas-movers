<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\BlogPost;
use App\Models\Route as RouteModel;
use App\Models\Service;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    public function __invoke()
    {
        $data = Cache::remember('sitemap', 3600, function () {
            return [
                'services' => Service::published()->ordered()->get(['slug', 'updated_at']),
                'areas' => Area::published()->ordered()->get(['slug', 'updated_at']),
                'routes' => RouteModel::published()->ordered()->get(['slug', 'updated_at']),
                'blogPosts' => BlogPost::published()->latest('published_at')->get(['slug', 'updated_at']),
            ];
        });

        return response()
            ->view('sitemap', $data)
            ->header('Content-Type', 'text/xml');
    }
}
