<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'slug' => 'local-moving',
                'name' => 'Local Moving',
                'meta_title' => 'Local Movers Calgary | Unitas Movers',
                'meta_description' => 'Professional local movers in Calgary. Licensed, insured, affordable. Free quotes — call (403) 991-3206 or book online today.',
                'h1' => 'Calgary\'s Trusted Local Moving Company',
                'sort_order' => 1,
            ],
            [
                'slug' => 'residential-moving',
                'name' => 'Residential Moving',
                'meta_title' => 'Residential Movers Calgary | Unitas Movers',
                'meta_description' => 'Full-service residential movers in Calgary. From condos to houses, we handle it all. Insured, careful crews. Get your free quote today.',
                'h1' => 'Professional Residential Movers in Calgary',
                'sort_order' => 2,
            ],
            [
                'slug' => 'apartment-moving',
                'name' => 'Apartment Moving',
                'meta_title' => 'Apartment Movers Calgary | Unitas Movers',
                'meta_description' => 'Expert apartment movers in Calgary. Elevator-friendly, efficient crews. Protect your deposit. Free quotes — call (403) 991-3206.',
                'h1' => 'Apartment Moving Services in Calgary',
                'sort_order' => 3,
            ],
            [
                'slug' => 'condo-moving',
                'name' => 'Condo Moving',
                'meta_title' => 'Condo Movers Calgary | Unitas Movers',
                'meta_description' => 'Specialized condo movers in Calgary. We handle building rules, elevator bookings, and tight spaces. Licensed and insured.',
                'h1' => 'Professional Condo Moving in Calgary',
                'sort_order' => 4,
            ],
            [
                'slug' => 'commercial-moving',
                'name' => 'Commercial Moving',
                'meta_title' => 'Commercial Movers Calgary | Unitas Movers',
                'meta_description' => 'Office and commercial movers in Calgary. Minimize downtime with weekend and evening moves. IT equipment handled safely. Free quote.',
                'h1' => 'Commercial and Office Movers in Calgary',
                'sort_order' => 5,
            ],
            [
                'slug' => 'long-distance-moving',
                'name' => 'Long Distance Moving',
                'meta_title' => 'Long Distance Movers Calgary | Unitas Movers',
                'meta_description' => 'Long distance movers from Calgary to Edmonton, Vancouver, Toronto and beyond. Licensed, insured, transparent pricing. Get a free quote.',
                'h1' => 'Long Distance Moving from Calgary',
                'sort_order' => 6,
            ],
            [
                'slug' => 'packing-unpacking',
                'name' => 'Packing & Unpacking',
                'meta_title' => 'Packing Services Calgary | Unitas Movers',
                'meta_description' => 'Professional packing and unpacking services in Calgary. Quality materials, fragile item specialty. Full or partial packing available.',
                'h1' => 'Professional Packing and Unpacking Services in Calgary',
                'sort_order' => 7,
            ],
            [
                'slug' => 'piano-moving',
                'name' => 'Piano Moving',
                'meta_title' => 'Piano Movers Calgary | Unitas Movers',
                'meta_description' => 'Expert piano movers in Calgary. Grand, upright, and digital pianos. Specialized padding, trained crews. Fully insured. Free quotes.',
                'h1' => 'Professional Piano Moving in Calgary',
                'sort_order' => 8,
            ],
            [
                'slug' => 'specialty-moving',
                'name' => 'Specialty Moving',
                'meta_title' => 'Specialty Movers Calgary | Unitas Movers',
                'meta_description' => 'Heavy and specialty item movers in Calgary. Hot tubs, safes, antiques, and oversized items. Fully insured with trained crews.',
                'h1' => 'Specialty and Heavy Item Moving in Calgary',
                'sort_order' => 9,
            ],
            [
                'slug' => 'furniture-moving',
                'name' => 'Furniture Moving',
                'meta_title' => 'Furniture Movers Calgary | Unitas Movers',
                'meta_description' => 'Furniture moving and delivery in Calgary. Single items or full households. Assembly and disassembly included. Call for a free quote.',
                'h1' => 'Furniture Moving and Delivery in Calgary',
                'sort_order' => 10,
            ],
            [
                'slug' => 'small-moves',
                'name' => 'Small Moves',
                'meta_title' => 'Small Moves Calgary | Unitas Movers',
                'meta_description' => 'Small moves and single-item delivery in Calgary. No job too small. Affordable hourly rates. Book your small move today.',
                'h1' => 'Small Moves and Single-Item Moving in Calgary',
                'sort_order' => 11,
            ],
            [
                'slug' => 'senior-moving',
                'name' => 'Senior Moving',
                'meta_title' => 'Senior Movers Calgary | Unitas Movers',
                'meta_description' => 'Compassionate senior movers in Calgary. Downsizing assistance, packing help, and patient crews. Flexible scheduling available.',
                'h1' => 'Senior Moving Assistance in Calgary',
                'sort_order' => 12,
            ],
            [
                'slug' => 'same-day-moving',
                'name' => 'Same-Day Moving',
                'meta_title' => 'Same-Day Movers Calgary | Unitas Movers',
                'meta_description' => 'Same-day and last-minute movers in Calgary. Emergency moves available. Call (403) 991-3206 for immediate availability.',
                'h1' => 'Same-Day and Last-Minute Movers in Calgary',
                'sort_order' => 13,
            ],
            [
                'slug' => 'evening-weekend-moving',
                'name' => 'Evening & Weekend Moving',
                'meta_title' => 'Evening & Weekend Movers Calgary | Unitas Movers',
                'meta_description' => 'Evening and weekend movers in Calgary. Flexible scheduling around your life. No premium surcharges. Get your free quote.',
                'h1' => 'Evening and Weekend Moving Services in Calgary',
                'sort_order' => 14,
            ],
            [
                'slug' => 'storage-solutions',
                'name' => 'Storage Solutions',
                'meta_title' => 'Moving & Storage Calgary | Unitas Movers',
                'meta_description' => 'Moving and storage solutions in Calgary. Short-term and long-term options. Climate-controlled, secure facilities. Free quote.',
                'h1' => 'Moving and Storage Solutions in Calgary',
                'sort_order' => 15,
            ],
            [
                'slug' => 'junk-removal',
                'name' => 'Junk Removal',
                'meta_title' => 'Junk Removal Calgary | Unitas Movers',
                'meta_description' => 'Junk removal and disposal in Calgary. Responsible disposal, donation coordination. Add to your move or book standalone service.',
                'h1' => 'Junk Removal Services in Calgary',
                'sort_order' => 16,
            ],
            [
                'slug' => 'affordable-moving',
                'name' => 'Affordable Moving',
                'meta_title' => 'Affordable Movers Calgary | Unitas Movers',
                'meta_description' => 'Budget-friendly movers in Calgary. Transparent pricing, no hidden fees. Quality service at affordable rates. Get your free quote.',
                'h1' => 'Affordable Moving Services in Calgary',
                'sort_order' => 17,
            ],
        ];

        foreach ($services as $service) {
            $service['is_published'] = true;
            Service::create($service);
        }
    }
}
