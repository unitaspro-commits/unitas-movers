<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\BlogPost;
use App\Models\Faq;
use App\Models\Review;
use App\Models\Route as RouteModel;
use App\Models\Service;
use App\Services\SchemaMarkupService;

class PageController extends Controller
{
    public function pricing(SchemaMarkupService $schema)
    {
        $services = Service::published()->ordered()->get();
        $schemas = $schema->forStaticPage('pricing', 'Pricing', route('pricing'));

        return view('pages.pricing', compact('services', 'schemas'));
    }

    public function about(SchemaMarkupService $schema)
    {
        $schemas = $schema->forStaticPage('about', 'About', route('about'));

        return view('pages.about', compact('schemas'));
    }

    public function licensedInsured(SchemaMarkupService $schema)
    {
        $schemas = $schema->forStaticPage('licensed-insured', 'Licensed & Insured', route('about.licensed-insured'));

        return view('pages.licensed-insured', compact('schemas'));
    }

    public function privacy(SchemaMarkupService $schema)
    {
        $schemas = $schema->forStaticPage('privacy', 'Privacy Policy', route('privacy'));

        return view('pages.privacy', compact('schemas'));
    }

    public function terms(SchemaMarkupService $schema)
    {
        $schemas = $schema->forStaticPage('terms', 'Terms of Service', route('terms'));

        return view('pages.terms', compact('schemas'));
    }

    public function reviews(SchemaMarkupService $schema)
    {
        $featuredReviews = Review::published()->featured()
            ->with(['service', 'area'])
            ->latest()
            ->get();

        $otherReviews = Review::published()
            ->where('is_featured', false)
            ->with(['service', 'area'])
            ->latest()
            ->get();

        $allPublished = Review::published();
        $avgRating = (float) Review::published()->avg('rating') ?: 4.8;
        $totalReviews = Review::published()->count() ?: 30;

        $schemas = $schema->forReviewsPage();

        return view('pages.reviews', compact(
            'featuredReviews', 'otherReviews', 'avgRating', 'totalReviews', 'schemas'
        ));
    }

    public function faq(SchemaMarkupService $schema)
    {
        $faqs = Faq::published()->ordered()->get();
        $faqsByCategory = $faqs->groupBy('category');

        $schemas = $schema->forFaqPage($faqs);

        return view('pages.faq', compact('faqsByCategory', 'schemas'));
    }

    public function contact(SchemaMarkupService $schema)
    {
        $schemas = $schema->forContactPage();

        return view('pages.contact', compact('schemas'));
    }

    public function siteMap(SchemaMarkupService $schema)
    {
        $services = Service::published()->ordered()->get();
        $areas = Area::published()->ordered()->get();
        $quadrants = $areas->where('area_type', 'quadrant');
        $neighborhoods = $areas->where('area_type', 'neighborhood');
        $towns = $areas->where('area_type', 'town');
        $routes = RouteModel::where('is_published', true)->orderBy('origin_city')->get();
        $posts = BlogPost::published()->latest('published_at')->get();
        $schemas = $schema->forStaticPage('sitemap', 'Site Map', route('site-map'));

        return view('pages.site-map', compact(
            'services', 'quadrants', 'neighborhoods', 'towns', 'routes', 'posts', 'schemas'
        ));
    }
}
