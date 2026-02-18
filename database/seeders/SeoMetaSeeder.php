<?php

namespace Database\Seeders;

use App\Models\SeoMeta;
use Illuminate\Database\Seeder;

class SeoMetaSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'page_key' => 'homepage',
                'meta_title' => 'Calgary Movers | Alpine Movers — Licensed & Insured',
                'meta_description' => 'Professional movers in Calgary. Licensed, insured, affordable. Local and long-distance moving, packing, piano moves. Free quotes — call (403) 800-2747.',
                'h1' => 'Calgary\'s Trusted Moving Company',
                'canonical_url' => 'https://alpinemovers.ca',
                'schema_json' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'MovingCompany',
                    'name' => 'Alpine Movers Calgary',
                    'description' => 'Professional moving company in Calgary, Alberta. Licensed, insured, affordable local and long-distance movers.',
                    'url' => 'https://alpinemovers.ca',
                    'telephone' => '+1-403-800-2747',
                    'email' => 'info@alpinemovers.ca',
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
                        ['@type' => 'City', 'name' => 'Calgary'],
                        ['@type' => 'City', 'name' => 'Airdrie'],
                        ['@type' => 'City', 'name' => 'Cochrane'],
                        ['@type' => 'City', 'name' => 'Okotoks'],
                        ['@type' => 'City', 'name' => 'Chestermere'],
                        ['@type' => 'Province', 'name' => 'Alberta'],
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
                    'sameAs' => [
                        'https://www.google.com/maps/place/Alpine+Movers+Calgary',
                    ],
                ],
            ],
            [
                'page_key' => 'pricing',
                'meta_title' => 'Moving Prices Calgary | Transparent Rates | Alpine Movers',
                'meta_description' => 'Calgary moving prices with no hidden fees. 2-person crew from $129/hr. Studios from $350, 3BR from $800. Free quotes — call (403) 800-2747.',
                'h1' => 'Transparent Moving Prices in Calgary',
                'canonical_url' => 'https://alpinemovers.ca/pricing',
                'schema_json' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'PriceSpecification',
                    'name' => 'Alpine Movers Calgary — Moving Pricing',
                    'description' => 'Transparent hourly and flat-rate moving pricing for Calgary local and long-distance moves.',
                    'priceCurrency' => 'CAD',
                ],
            ],
            [
                'page_key' => 'about',
                'meta_title' => 'About Alpine Movers Calgary | Licensed & Insured',
                'meta_description' => 'About Alpine Movers — Calgary\'s trusted moving company. Licensed, insured, affordable. Our story, values, and commitment to professional service.',
                'h1' => 'About Alpine Movers Calgary',
                'canonical_url' => 'https://alpinemovers.ca/about',
                'schema_json' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'AboutPage',
                    'name' => 'About Alpine Movers Calgary',
                    'description' => 'Learn about Alpine Movers — Calgary\'s trusted, licensed, insured moving company.',
                    'mainEntity' => [
                        '@type' => 'MovingCompany',
                        'name' => 'Alpine Movers Calgary',
                        'telephone' => '+1-403-800-2747',
                        'address' => [
                            '@type' => 'PostalAddress',
                            'addressLocality' => 'Calgary',
                            'addressRegion' => 'AB',
                            'addressCountry' => 'CA',
                        ],
                    ],
                ],
            ],
            [
                'page_key' => 'licensed-insured',
                'meta_title' => 'Licensed & Insured Movers Calgary | Alpine Movers',
                'meta_description' => 'Alpine Movers is fully licensed and insured in Alberta. WCB coverage, cargo insurance, and commercial vehicle insurance. Your belongings are protected.',
                'h1' => 'Licensed and Insured Calgary Movers',
                'canonical_url' => 'https://alpinemovers.ca/about/licensed-insured',
                'schema_json' => null,
            ],
            [
                'page_key' => 'quote',
                'meta_title' => 'Get a Free Moving Quote | Alpine Movers Calgary',
                'meta_description' => 'Request a free, no-obligation moving quote from Alpine Movers Calgary. Tell us about your move and we\'ll respond within hours.',
                'h1' => 'Get Your Free Moving Quote',
                'canonical_url' => 'https://alpinemovers.ca/get-a-quote',
                'schema_json' => null,
            ],
            [
                'page_key' => 'services-index',
                'meta_title' => 'Moving Services Calgary | Alpine Movers',
                'meta_description' => 'Full range of Calgary moving services. Local, long-distance, packing, piano, commercial, senior, and specialty moves. Licensed and insured.',
                'h1' => 'Our Moving Services',
                'canonical_url' => 'https://alpinemovers.ca/services',
                'schema_json' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'ItemList',
                    'name' => 'Alpine Movers Calgary — Moving Services',
                    'description' => 'Complete list of moving services offered by Alpine Movers in Calgary, Alberta.',
                    'numberOfItems' => 19,
                ],
            ],
            [
                'page_key' => 'areas-index',
                'meta_title' => 'Areas Served in Calgary | Alpine Movers',
                'meta_description' => 'Alpine Movers serves all Calgary quadrants, 40+ neighbourhoods, and surrounding towns. Airdrie, Cochrane, Okotoks, Canmore, and more.',
                'h1' => 'Areas We Serve in Calgary',
                'canonical_url' => 'https://alpinemovers.ca/areas',
                'schema_json' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'ItemList',
                    'name' => 'Areas served by Alpine Movers Calgary',
                    'description' => 'All Calgary neighbourhoods, quadrants, and surrounding towns served by Alpine Movers.',
                ],
            ],
            [
                'page_key' => 'blog-index',
                'meta_title' => 'Moving Blog | Tips & Guides | Alpine Movers Calgary',
                'meta_description' => 'Expert moving tips, packing guides, Calgary neighbourhood advice, and seasonal moving info from the Alpine Movers team.',
                'h1' => 'Moving Tips & Guides',
                'canonical_url' => 'https://alpinemovers.ca/blog',
                'schema_json' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Blog',
                    'name' => 'Alpine Movers Calgary — Moving Blog',
                    'description' => 'Expert moving advice, packing tips, and Calgary local guides from Alpine Movers.',
                    'url' => 'https://alpinemovers.ca/blog',
                ],
            ],
            [
                'page_key' => 'privacy',
                'meta_title' => 'Privacy Policy | Alpine Movers Calgary',
                'meta_description' => 'Alpine Movers Calgary privacy policy. How we collect, use, and protect your personal information when you use our website and services.',
                'h1' => 'Privacy Policy',
                'canonical_url' => 'https://alpinemovers.ca/privacy-policy',
                'schema_json' => null,
            ],
            [
                'page_key' => 'terms',
                'meta_title' => 'Terms of Service | Alpine Movers Calgary',
                'meta_description' => 'Alpine Movers Calgary terms of service. Booking conditions, liability, cancellation policy, and service agreements for all moving services.',
                'h1' => 'Terms of Service',
                'canonical_url' => 'https://alpinemovers.ca/terms-of-service',
                'schema_json' => null,
            ],
        ];

        foreach ($pages as $data) {
            SeoMeta::create($data);
        }
    }
}
