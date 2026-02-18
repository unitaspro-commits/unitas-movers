<?php

namespace App\Http\Controllers;

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
}
