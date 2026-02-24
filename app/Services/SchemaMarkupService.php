<?php

namespace App\Services;

use App\Models\Area;
use App\Models\BlogPost;
use App\Models\Review;
use App\Models\Route;
use App\Models\SeoMeta;
use App\Models\Service;
use Illuminate\Support\Facades\Cache;

class SchemaMarkupService
{
    private const COMPANY_NAME = 'Unitas Movers';
    private const PHONE = '+1-403-991-3206';
    private const EMAIL = 'info@unitasmovers.ca';
    private const SITE_URL = 'https://unitasmovers.ca';
    private const LOGO_URL = 'https://unitasmovers.ca/images/logo.png';

    public function forHomePage(): array
    {
        $schemas = [];

        $seo = SeoMeta::forPage('homepage');
        if ($seo && $seo->schema_json) {
            $company = $seo->schema_json;
        } else {
            $company = $this->movingCompany();
        }

        // Merge AggregateRating into the MovingCompany entity (avoids duplicate entities)
        $ratingData = $this->aggregateRating();
        if (isset($ratingData['aggregateRating'])) {
            $company['aggregateRating'] = $ratingData['aggregateRating'];
        }

        $schemas[] = $company;
        $schemas[] = $this->webSite();

        return $schemas;
    }

    public function forServiceShow(Service $service): array
    {
        $schemas = [];

        $schemas[] = $this->serviceSchema($service);

        if (!empty($service->faq_json)) {
            $schemas[] = $this->faqPage($service->faq_json);
        }

        $schemas[] = $this->breadcrumbList([
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Services', 'url' => route('services.index')],
            ['name' => $service->name, 'url' => route('services.show', $service)],
        ]);

        return $schemas;
    }

    public function forBlogShow(BlogPost $post): array
    {
        $schemas = [];

        $schemas[] = $this->blogPosting($post);

        if (!empty($post->faq_json)) {
            $schemas[] = $this->faqPage($post->faq_json);
        }

        $schemas[] = $this->breadcrumbList([
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Blog', 'url' => route('blog.index')],
            ['name' => $post->title, 'url' => route('blog.show', $post)],
        ]);

        return $schemas;
    }

    public function forAreaShow(Area $area): array
    {
        $schemas = [];

        $schemas[] = $this->areaServiceSchema($area);

        if (!empty($area->faq_json)) {
            $schemas[] = $this->faqPage($area->faq_json);
        }

        $crumbs = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Areas', 'url' => route('areas.index')],
        ];
        if ($area->parent) {
            $crumbs[] = ['name' => $area->parent->name, 'url' => route('areas.show', $area->parent)];
        }
        $crumbs[] = ['name' => $area->name, 'url' => route('areas.show', $area)];

        $schemas[] = $this->breadcrumbList($crumbs);

        return $schemas;
    }

    public function forRouteShow(Route $route): array
    {
        $schemas = [];

        $schemas[] = $this->routeServiceSchema($route);

        if (!empty($route->faq_json)) {
            $schemas[] = $this->faqPage($route->faq_json);
        }

        $schemas[] = $this->breadcrumbList([
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Routes', 'url' => route('routes.index')],
            ['name' => $route->origin_city . ' to ' . $route->dest_city, 'url' => route('routes.show', $route)],
        ]);

        return $schemas;
    }

    public function forIndexPage(string $name, string $url, ?string $pageKey = null): array
    {
        $schemas = [];

        if ($pageKey) {
            $seo = SeoMeta::forPage($pageKey);
            if ($seo && $seo->schema_json) {
                $schemas[] = $seo->schema_json;
            }
        }

        $schemas[] = $this->breadcrumbList([
            ['name' => 'Home', 'url' => route('home')],
            ['name' => $name, 'url' => $url],
        ]);

        return $schemas;
    }

    public function forReviewsPage(): array
    {
        $company = $this->movingCompany();

        $ratingData = $this->aggregateRating();
        if (isset($ratingData['aggregateRating'])) {
            $company['aggregateRating'] = $ratingData['aggregateRating'];
        }

        $schemas = [];
        $schemas[] = $company;
        $schemas[] = $this->breadcrumbList([
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Reviews', 'url' => route('reviews')],
        ]);

        return $schemas;
    }

    public function forFaqPage($faqs): array
    {
        $schemas = [];

        $schemaEligible = $faqs->filter(fn ($faq) => $faq->schema_eligible);
        $faqItems = $schemaEligible->map(fn ($faq) => [
            'question' => $faq->question,
            'answer' => $faq->answer,
        ])->values()->toArray();

        if (!empty($faqItems)) {
            $schemas[] = $this->faqPage($faqItems);
        }

        $schemas[] = $this->breadcrumbList([
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'FAQ', 'url' => route('faq')],
        ]);

        return $schemas;
    }

    public function forContactPage(): array
    {
        $company = $this->movingCompany();

        $ratingData = $this->aggregateRating();
        if (isset($ratingData['aggregateRating'])) {
            $company['aggregateRating'] = $ratingData['aggregateRating'];
        }

        $schemas = [];
        $schemas[] = $company;
        $schemas[] = $this->breadcrumbList([
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Contact', 'url' => route('contact')],
        ]);

        return $schemas;
    }

    public function forStaticPage(string $pageKey, string $name, string $url): array
    {
        $schemas = [];

        $seo = SeoMeta::forPage($pageKey);
        if ($seo && $seo->schema_json) {
            $schemas[] = $seo->schema_json;
        }

        $schemas[] = $this->breadcrumbList([
            ['name' => 'Home', 'url' => route('home')],
            ['name' => $name, 'url' => $url],
        ]);

        return $schemas;
    }

    private function movingCompany(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'MovingCompany',
            'name' => self::COMPANY_NAME,
            'url' => self::SITE_URL,
            'logo' => self::LOGO_URL,
            'image' => self::LOGO_URL,
            'telephone' => self::PHONE,
            'email' => self::EMAIL,
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Calgary',
                'addressRegion' => 'AB',
                'addressCountry' => 'CA',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 51.0447,
                'longitude' => -114.0719,
            ],
            'areaServed' => [
                '@type' => 'City',
                'name' => 'Calgary',
                'sameAs' => 'https://en.wikipedia.org/wiki/Calgary',
            ],
            'priceRange' => '$$',
            'openingHoursSpecification' => [
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                    'opens' => '07:00',
                    'closes' => '20:00',
                ],
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Saturday', 'Sunday'],
                    'opens' => '08:00',
                    'closes' => '18:00',
                ],
            ],
            'sameAs' => [],
        ];
    }

    private function aggregateRating(): array
    {
        return Cache::remember('schema:aggregate_rating', 3600, function () {
            $avgRating = Review::published()->avg('rating') ?: 4.8;
            $count = Review::published()->count() ?: 30;

            return [
                '@context' => 'https://schema.org',
                '@type' => 'MovingCompany',
                'name' => self::COMPANY_NAME,
                'aggregateRating' => [
                    '@type' => 'AggregateRating',
                    'ratingValue' => round($avgRating, 1),
                    'bestRating' => 5,
                    'worstRating' => 1,
                    'ratingCount' => $count,
                ],
            ];
        });
    }

    private function webSite(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => self::COMPANY_NAME,
            'url' => self::SITE_URL,
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => self::SITE_URL . '/blog?q={search_term_string}',
                'query-input' => 'required name=search_term_string',
            ],
        ];
    }

    private function serviceSchema(Service $service): array
    {
        if ($service->schema_json) {
            return $service->schema_json;
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $service->name,
            'description' => $service->meta_description,
            'url' => route('services.show', $service),
            'provider' => [
                '@type' => 'MovingCompany',
                'name' => self::COMPANY_NAME,
                'telephone' => self::PHONE,
                'url' => self::SITE_URL,
            ],
            'areaServed' => [
                '@type' => 'City',
                'name' => 'Calgary',
            ],
        ];
    }

    private function areaServiceSchema(Area $area): array
    {
        if ($area->schema_json) {
            return $area->schema_json;
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => 'Moving Services in ' . $area->name,
            'description' => $area->meta_description,
            'url' => route('areas.show', $area),
            'provider' => [
                '@type' => 'MovingCompany',
                'name' => self::COMPANY_NAME,
                'telephone' => self::PHONE,
                'url' => self::SITE_URL,
            ],
            'areaServed' => [
                '@type' => 'Place',
                'name' => $area->name,
            ],
        ];

        if ($area->latitude && $area->longitude) {
            $schema['areaServed']['geo'] = [
                '@type' => 'GeoCoordinates',
                'latitude' => (float) $area->latitude,
                'longitude' => (float) $area->longitude,
            ];
        }

        if ($area->avg_move_cost_2bed) {
            $schema['offers'] = [
                '@type' => 'Offer',
                'priceCurrency' => 'CAD',
                'price' => $area->avg_move_cost_2bed,
                'description' => 'Average 2-bedroom move cost in ' . $area->name,
            ];
        }

        return $schema;
    }

    private function routeServiceSchema(Route $route): array
    {
        if ($route->schema_json) {
            return $route->schema_json;
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => 'Moving from ' . $route->origin_city . ' to ' . $route->dest_city,
            'description' => $route->meta_description,
            'url' => route('routes.show', $route),
            'provider' => [
                '@type' => 'MovingCompany',
                'name' => self::COMPANY_NAME,
                'telephone' => self::PHONE,
                'url' => self::SITE_URL,
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => $route->origin_city],
                ['@type' => 'City', 'name' => $route->dest_city],
            ],
        ];

        if ($route->price_range_min && $route->price_range_max) {
            $schema['offers'] = [
                '@type' => 'AggregateOffer',
                'priceCurrency' => 'CAD',
                'lowPrice' => $route->price_range_min,
                'highPrice' => $route->price_range_max,
            ];
        }

        return $schema;
    }

    private function blogPosting(BlogPost $post): array
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'headline' => $post->title,
            'description' => $post->meta_description ?? $post->excerpt,
            'url' => route('blog.show', $post),
            'datePublished' => $post->published_at?->toIso8601String(),
            'dateModified' => $post->updated_at->toIso8601String(),
            'author' => [
                '@type' => 'Organization',
                'name' => self::COMPANY_NAME,
                'url' => self::SITE_URL,
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => self::COMPANY_NAME,
                'url' => self::SITE_URL,
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => self::LOGO_URL,
                ],
            ],
        ];

        if ($post->featured_image) {
            $schema['image'] = $post->featured_image;
        }

        return $schema;
    }

    private function faqPage(array $faqs): array
    {
        $mainEntity = [];

        foreach ($faqs as $faq) {
            $question = $faq['question'] ?? $faq['q'] ?? null;
            $answer = $faq['answer'] ?? $faq['a'] ?? null;

            if ($question && $answer) {
                $mainEntity[] = [
                    '@type' => 'Question',
                    'name' => $question,
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $answer,
                    ],
                ];
            }
        }

        if (empty($mainEntity)) {
            return [];
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $mainEntity,
        ];
    }

    private function breadcrumbList(array $items): array
    {
        $elements = [];

        foreach ($items as $i => $item) {
            $elements[] = [
                '@type' => 'ListItem',
                'position' => $i + 1,
                'name' => $item['name'],
                'item' => $item['url'],
            ];
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $elements,
        ];
    }
}
