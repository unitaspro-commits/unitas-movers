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

        // Add FAQPage schema for the hardcoded pricing FAQs
        $schemas[] = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                ['@type' => 'Question', 'name' => 'Is there a minimum charge?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes, our minimum booking is 2 hours for local moves. Most studio and small apartment moves fall within this minimum.']],
                ['@type' => 'Question', 'name' => 'Do you charge for travel time?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'No. For local moves within Calgary, there are no travel time charges. Your clock starts when we begin loading and stops when we finish unloading.']],
                ['@type' => 'Question', 'name' => 'Are there any hidden fees?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Absolutely not. The quote we provide includes everything — crew, truck, fuel, equipment, padding, and insurance. No stair fees, no long-carry fees, no surprises.']],
                ['@type' => 'Question', 'name' => 'How do I get an exact quote?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Request a free quote through our form or call (403) 800-2747. We\'ll ask about your current and new locations, home size, and any special items. Most quotes are provided within 2 hours.']],
                ['@type' => 'Question', 'name' => 'Is tipping expected?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Tipping is never required but always appreciated. If you\'re happy with the service, $20–$40 per mover is a common range in Calgary.']],
                ['@type' => 'Question', 'name' => 'Do you offer discounts?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'We offer competitive rates year-round. Off-season moves (October–April) and mid-week bookings are naturally more affordable due to lower demand.']],
            ],
        ];

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

        // Add FAQPage schema for the hardcoded insurance FAQs
        $schemas[] = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                ['@type' => 'Question', 'name' => 'What happens if my belongings are damaged during the move?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Contact us immediately. Our liability insurance covers damage that occurs during the moving process. We\'ll document the damage, file a claim, and work to resolve it as quickly as possible.']],
                ['@type' => 'Question', 'name' => 'Does your insurance cover high-value items like pianos or artwork?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Our standard liability coverage applies to all items we move. For exceptionally high-value items worth $5,000+, we recommend discussing additional coverage options when you request your quote.']],
                ['@type' => 'Question', 'name' => 'Are your movers employees or contractors?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Our movers are direct team members, not independent contractors. This means they are fully covered by our WCB policy, professionally trained, and accountable to our quality commitments.']],
                ['@type' => 'Question', 'name' => 'Can I see your insurance certificate before booking?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Absolutely. We provide proof of insurance to any customer who requests it. Just ask when you receive your quote, and we\'ll send it over promptly.']],
            ],
        ];

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
