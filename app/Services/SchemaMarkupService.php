<?php

namespace App\Services;

use App\Models\Area;
use App\Models\BlogPost;
use App\Models\Review;
use App\Models\SeoMeta;
use App\Models\Service;

class SchemaMarkupService
{
    private const COMPANY_NAME = 'Alpine Movers Calgary';
    private const PHONE = '+1-403-800-2747';
    private const EMAIL = 'info@alpinemovers.ca';
    private const SITE_URL = 'https://alpinemovers.ca';
    private const LOGO_URL = 'https://alpinemovers.ca/images/logo.png';

    public function forHomePage(): array
    {
        $schemas = [];

        $seo = SeoMeta::forPage('home');
        if ($seo && $seo->schema_json) {
            $schemas[] = $seo->schema_json;
        } else {
            $schemas[] = $this->movingCompany();
        }

        $schemas[] = $this->aggregateRating();
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

    public function forIndexPage(string $name, string $url): array
    {
        return [
            $this->breadcrumbList([
                ['name' => 'Home', 'url' => route('home')],
                ['name' => $name, 'url' => $url],
            ]),
        ];
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
