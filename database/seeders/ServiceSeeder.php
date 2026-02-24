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
                'meta_description' => 'Professional local movers in Calgary. Licensed, insured, affordable. Free quotes — call (403) 800-2747 or book online today.',
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
                'meta_description' => 'Expert apartment movers in Calgary. Elevator-friendly, efficient crews. Protect your deposit. Free quotes — call (403) 800-2747.',
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
                'meta_description' => 'Same-day and last-minute movers in Calgary. Emergency moves available. Call (403) 800-2747 for immediate availability.',
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
            [
                'slug' => 'eco-friendly-moving',
                'name' => 'Eco-Friendly Moving',
                'meta_title' => 'Eco-Friendly Movers Calgary | Green Moving | Unitas Movers',
                'meta_description' => 'Eco-friendly movers in Calgary. Reusable bins, recyclable packing, fuel-efficient routes. Green moving without compromise. Call (403) 800-2747.',
                'h1' => 'Eco-Friendly Moving Services in Calgary',
                'hero_text' => 'Move green without compromising on care or quality. Unitas Movers uses reusable packing bins, recyclable materials, and fuel-efficient routing to minimize the environmental impact of your move — while still delivering the professional, fully insured service Calgary families trust.',
                'body' => '<h2>What Makes Our Moving Service Eco-Friendly</h2><p>Traditional moves generate significant waste — cardboard boxes used once and discarded, rolls of plastic wrap, styrofoam peanuts that end up in landfills. At Unitas Movers, we\'ve redesigned our moving process to minimize waste at every step.</p><p>Our <strong>reusable plastic moving bins</strong> replace single-use cardboard boxes. They\'re sturdier (better protection for your belongings), stackable (more efficient truck loading), and returned to us after your move for reuse. Each bin replaces dozens of cardboard boxes over its lifetime.</p><p>We use <strong>recyclable packing paper and biodegradable padding</strong> instead of styrofoam and plastic bubble wrap. For fragile items, we use moving blankets and cloth padding that are washed and reused move after move.</p><h2>Fuel-Efficient Routes and Practices</h2><p>We plan every move with optimized routes to reduce fuel consumption and emissions. Our crew is trained to load trucks efficiently — fewer trips between locations means less fuel burned and less time on the road.</p><p>For local Calgary moves, we minimize drive time by strategically scheduling moves within the same quadrant. For <a href="/services/long-distance-moving">long-distance moves</a>, we coordinate shared loads when possible to reduce the number of individual truck trips.</p><h2>Responsible Disposal and Donation</h2><p>Moving often means decluttering. Instead of sending unwanted items to the landfill, we help coordinate <strong>donation pickups</strong> with local Calgary charities. Furniture, clothing, and household items in good condition find new homes instead of filling waste bins.</p><p>For items that can\'t be donated, we ensure proper recycling through Calgary\'s waste management facilities. Electronics, appliances, and recyclable materials are sorted and processed responsibly.</p><h2>Why Choose Eco-Friendly Moving</h2><p>Choosing green moving practices doesn\'t mean paying more or getting less. Our eco-friendly service includes the same professional crew, comprehensive insurance, furniture padding, and no-hidden-fees guarantee as every Unitas move. The only difference is less waste — and a smaller footprint on the city we all call home.</p>',
                'faq_json' => json_encode([
                    ['q' => 'Do eco-friendly moves cost more?', 'a' => 'No. Our eco-friendly practices are built into our standard service. You get the same competitive rates with less environmental impact.'],
                    ['q' => 'What are reusable moving bins?', 'a' => 'Heavy-duty plastic bins that replace cardboard boxes. We deliver them before your move and pick them up after. They\'re sturdier, stackable, and produce zero waste.'],
                    ['q' => 'Can you help me donate unwanted items?', 'a' => 'Yes. We coordinate donation pickups with local Calgary charities for furniture, clothing, and household items in good condition.'],
                    ['q' => 'Do you use any plastic wrap or styrofoam?', 'a' => 'We minimize plastic use as much as possible. We use reusable moving blankets, recyclable packing paper, and biodegradable padding instead of single-use plastic and styrofoam.'],
                ]),
                'sort_order' => 18,
            ],
            [
                'slug' => 'bilingual-movers',
                'name' => 'Bilingual Movers (English & French)',
                'meta_title' => 'French-Speaking Movers Calgary | Bilingual | Unitas Movers',
                'meta_description' => 'Bilingual English-French movers in Calgary. Service en français. Calgary\'s only francophone-friendly moving company. Appelez (403) 800-2747.',
                'h1' => 'Bilingual Movers in Calgary — English & French Service',
                'hero_text' => 'Unitas Movers is Calgary\'s only moving company with a dedicated bilingual English-French crew. Whether you prefer to communicate in English or French, our team provides the same professional, fully insured moving service — in the language you\'re most comfortable with.',
                'body' => '<h2>Service de Déménagement en Français à Calgary</h2><p>Calgary\'s Francophone community is growing rapidly — over 86,000 French speakers call the Calgary metro area home, and that number has grown 16% since 2006. Yet until now, no local Calgary moving company has offered dedicated French-language service.</p><p>At Unitas Movers, our bilingual crew members are native French speakers who can handle every aspect of your move in French — from the initial quote through to the final box placement in your new home. No miscommunication about fragile items. No confusion about special instructions. Just clear, comfortable service in your preferred language.</p><h2>Nos Services en Français</h2><p>Every service we offer is available with French-speaking crew members:</p><p><strong><a href="/services/residential-moving">Déménagement résidentiel</a></strong> — Houses, apartments, and condos across all of Calgary.</p><p><strong><a href="/services/commercial-moving">Déménagement commercial</a></strong> — Offices, retail spaces, and warehouses.</p><p><strong><a href="/services/long-distance-moving">Déménagement longue distance</a></strong> — Calgary to Edmonton, Vancouver, Kelowna, and beyond.</p><p><strong><a href="/services/packing-unpacking">Services d\'emballage</a></strong> — Professional packing and unpacking with care.</p><h2>Serving Calgary\'s Francophone Community</h2><p>We\'re proud to serve Calgary\'s Francophone organizations and community members. Whether you\'re relocating from Montreal or Quebec City, moving within Calgary\'s French-speaking communities, or simply prefer to communicate in French, we\'re here to help.</p><p>Alberta declared 2026 as the Year of the Francophonie, marking the 100th anniversary of ACFA (Association canadienne-française de l\'Alberta). Unitas Movers is committed to supporting Calgary\'s Francophone community with professional, accessible moving services.</p><h2>Pourquoi Choisir Unitas Movers</h2><p>Beyond our bilingual capability, every move includes comprehensive insurance, professional padding and protection, transparent pricing with no hidden fees, and the same care we bring to every job. The only difference is the language — everything else meets the same high standard.</p>',
                'faq_json' => json_encode([
                    ['q' => 'Do all your crew members speak French?', 'a' => 'We have dedicated bilingual crew members who are native French speakers. When you book with us and request French service, we assign a French-speaking crew to your move.'],
                    ['q' => 'Is the French service available for all move types?', 'a' => 'Yes. Residential, commercial, long-distance, packing, piano moving — every service we offer is available with French-speaking crew members.'],
                    ['q' => 'Est-ce que le devis est aussi disponible en français?', 'a' => 'Oui! Vous pouvez demander votre devis en français. Appelez-nous au (403) 800-2747 ou remplissez notre formulaire en ligne et mentionnez votre préférence linguistique.'],
                    ['q' => 'Do I need to request French service in advance?', 'a' => 'We recommend mentioning your language preference when requesting a quote so we can schedule the right crew. Same-day requests may be subject to availability.'],
                ]),
                'sort_order' => 19,
            ],
        ];

        foreach ($services as $service) {
            $service['is_published'] = true;
            Service::create($service);
        }
    }
}
