<?php

namespace App\Http\Controllers;

use App\Models\Service;

class PageController extends Controller
{
    public function pricing()
    {
        $services = Service::published()->ordered()->get();

        return view('pages.pricing', compact('services'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function licensedInsured()
    {
        return view('pages.licensed-insured');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function terms()
    {
        return view('pages.terms');
    }
}
