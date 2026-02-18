<?php

namespace App\Http\Controllers;

use App\Enums\MoveSize;
use App\Models\Area;
use App\Models\BlogPost;
use App\Models\Review;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = Service::published()->ordered()->take(6)->get();
        $reviews = Review::published()->featured()->latest()->take(3)->get();
        $blogPosts = BlogPost::published()->latest('published_at')->take(3)->get();
        $areas = Area::published()->ofType('quadrant')->ordered()->get();
        $moveSizes = MoveSize::cases();

        return view('pages.home', compact('services', 'reviews', 'blogPosts', 'areas', 'moveSizes'));
    }
}
