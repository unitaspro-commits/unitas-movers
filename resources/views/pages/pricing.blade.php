@extends('layouts.app')
@section('title', 'Moving Costs Calgary | Pricing from $99/hr | Unitas Movers')
@section('meta_description', 'Calgary movers from $99/hr for 2 movers + truck. Studio from $350, 3BR from $1,200. No hidden fees. Free quotes — (403) 991-3206.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-br from-primary to-primary-dark py-14 lg:py-20 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/3"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/50 text-sm mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                <li><span>&rsaquo;</span></li>
                <li class="text-white font-medium">Pricing</li>
            </ol>
        </nav>
        <div class="max-w-3xl">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">How Much Do Movers Cost in Calgary?</h1>
            <p class="mt-4 text-lg text-white/80 leading-relaxed">Transparent, all-inclusive pricing with no hidden fees. What we quote is what you pay — guaranteed.</p>
        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="max-w-4xl mx-auto">

        {{-- Hourly Rates --}}
        <div>
            <h2 class="text-2xl font-extrabold text-dark mb-6">Hourly Moving Rates in Calgary</h2>
            <p class="text-gray-500 mb-6">All hourly rates include the crew, truck, fuel, equipment, furniture padding, and basic liability insurance. No extra charges for dollies, blankets, or shrink wrap.</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 text-center">
                    <p class="text-sm font-semibold text-gray-400 uppercase">2 Movers + Truck</p>
                    <p class="text-4xl font-extrabold text-primary mt-2">$99<span class="text-lg text-gray-400">/hr</span></p>
                    <p class="text-gray-500 text-sm mt-2">Studios, 1BR apartments, small moves</p>
                </div>
                <div class="bg-primary/5 rounded-xl p-6 border-2 border-primary text-center relative">
                    <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full">Most Popular</span>
                    <p class="text-sm font-semibold text-gray-400 uppercase">3 Movers + Truck</p>
                    <p class="text-4xl font-extrabold text-primary mt-2">$129<span class="text-lg text-gray-400">/hr</span></p>
                    <p class="text-gray-500 text-sm mt-2">2–3BR homes, condos</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 text-center">
                    <p class="text-sm font-semibold text-gray-400 uppercase">4 Movers + Truck</p>
                    <p class="text-4xl font-extrabold text-primary mt-2">$159<span class="text-lg text-gray-400">/hr</span></p>
                    <p class="text-gray-500 text-sm mt-2">4BR+ homes, offices, large moves</p>
                </div>
            </div>
        </div>

        {{-- Flat Rate Estimates --}}
        <div class="mt-14">
            <h2 class="text-2xl font-extrabold text-dark mb-6">Estimated Moving Costs by Home Size</h2>
            <p class="text-gray-500 mb-6">These estimates are for local moves within Calgary (under 30 km). Prices vary based on floor level, distance between locations, volume of belongings, and time of year.</p>
            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-xl shadow-sm border border-gray-100">
                    <thead>
                        <tr class="border-b border-gray-100 bg-gray-50">
                            <th class="text-left py-4 px-6 text-sm font-bold text-dark">Move Size</th>
                            <th class="text-left py-4 px-6 text-sm font-bold text-dark">Crew</th>
                            <th class="text-left py-4 px-6 text-sm font-bold text-dark">Est. Duration</th>
                            <th class="text-left py-4 px-6 text-sm font-bold text-dark">Cost Range</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr><td class="py-4 px-6">Studio / Bachelor</td><td class="py-4 px-6 text-gray-500">2 movers</td><td class="py-4 px-6 text-gray-500">2–3 hours</td><td class="py-4 px-6 font-bold text-primary">$350 – $550</td></tr>
                        <tr><td class="py-4 px-6">1 Bedroom</td><td class="py-4 px-6 text-gray-500">2 movers</td><td class="py-4 px-6 text-gray-500">3–4 hours</td><td class="py-4 px-6 font-bold text-primary">$500 – $750</td></tr>
                        <tr><td class="py-4 px-6">2 Bedrooms</td><td class="py-4 px-6 text-gray-500">3 movers</td><td class="py-4 px-6 text-gray-500">4–6 hours</td><td class="py-4 px-6 font-bold text-primary">$750 – $1,200</td></tr>
                        <tr><td class="py-4 px-6">3 Bedrooms</td><td class="py-4 px-6 text-gray-500">3–4 movers</td><td class="py-4 px-6 text-gray-500">6–8 hours</td><td class="py-4 px-6 font-bold text-primary">$1,200 – $1,800</td></tr>
                        <tr><td class="py-4 px-6">4+ Bedrooms</td><td class="py-4 px-6 text-gray-500">4 movers</td><td class="py-4 px-6 text-gray-500">8–10 hours</td><td class="py-4 px-6 font-bold text-primary">$1,800 – $2,500+</td></tr>
                        <tr><td class="py-4 px-6">Office / Commercial</td><td class="py-4 px-6 text-gray-500">Custom</td><td class="py-4 px-6 text-gray-500">Custom</td><td class="py-4 px-6 font-bold text-primary">Contact Us</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- What's Included --}}
        <div class="mt-14">
            <h2 class="text-2xl font-extrabold text-dark mb-6">What's Included in Every Move</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach([
                    'Professional moving crew (2–4 movers)',
                    'Moving truck with all necessary equipment',
                    'Furniture padding, blankets, and shrink wrap',
                    'Furniture disassembly and reassembly',
                    'Full liability insurance coverage',
                    'Floor and doorframe protection',
                    'No fuel surcharges or travel fees (within Calgary)',
                    'No stair or elevator charges',
                ] as $item)
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-accent mr-3 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-600">{{ $item }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- What Affects Cost --}}
        <div class="mt-14 prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-dark">
            <h2>What Affects Your Moving Cost in Calgary</h2>
            <p>Several factors determine the final price of your move. Understanding these helps you plan your budget and potentially reduce costs.</p>
            <p><strong>Volume of belongings</strong> is the biggest factor. A minimalist studio takes 2 hours; a fully furnished 3-bedroom home with a garage full of items takes 6–8 hours. The less you move, the less it costs — so decluttering before moving day pays off.</p>
            <p><strong>Distance between locations</strong> matters for local moves. Moving within the same neighborhood is faster than crossing the city from Tuscany to Cranston. For <a href="{{ route('routes.index') }}">long-distance moves</a> to Edmonton, Vancouver, or Kelowna, we provide flat-rate quotes based on distance and volume.</p>
            <p><strong>Access and logistics</strong> affect timing. Moves involving stairs, narrow hallways, long walks to the truck, or elevator bookings in condo buildings take longer. Let us know about access challenges when requesting your quote so we can plan accurately.</p>
            <p><strong>Time of year</strong> makes a difference. Peak moving season in Calgary runs from May through September, when demand and rates are highest. Moving in the off-season (October through April) can save you 15–25% on the same move. Mid-week moves are also typically cheaper than weekends.</p>
            <p><strong>Add-on services</strong> like <a href="{{ route('services.show', 'packing-unpacking') }}">professional packing</a>, <a href="{{ route('services.show', 'storage-solutions') }}">temporary storage</a>, or <a href="{{ route('services.show', 'piano-moving') }}">piano moving</a> are priced separately and added to your quote upfront — never as a surprise on moving day.</p>
        </div>

        {{-- Pricing FAQ --}}
        <div class="mt-14">
            <h2 class="text-2xl font-extrabold text-dark mb-8">Moving Cost Questions</h2>
            <div class="space-y-3" x-data="{ open: null }">
                @foreach([
                    ['q' => 'Is there a minimum charge?', 'a' => 'Yes, our minimum booking is 2 hours for local moves. Most studio and small apartment moves fall within this minimum.'],
                    ['q' => 'Do you charge for travel time?', 'a' => 'No. For local moves within Calgary, there are no travel time charges. Your clock starts when we begin loading and stops when we finish unloading.'],
                    ['q' => 'Are there any hidden fees?', 'a' => 'Absolutely not. The quote we provide includes everything — crew, truck, fuel, equipment, padding, and insurance. No stair fees, no long-carry fees, no surprises.'],
                    ['q' => 'How do I get an exact quote?', 'a' => 'Request a free quote through our form or call (403) 991-3206. We\'ll ask about your current and new locations, home size, and any special items. Most quotes are provided within 2 hours.'],
                    ['q' => 'Is tipping expected?', 'a' => 'Tipping is never required but always appreciated. If you\'re happy with the service, $20–$40 per mover is a common range in Calgary. We never factor tips into our pricing.'],
                    ['q' => 'Do you offer discounts?', 'a' => 'We offer competitive rates year-round. Off-season moves (October–April) and mid-week bookings are naturally more affordable due to lower demand. Contact us for current availability and pricing.'],
                ] as $index => $faq)
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <button @click="open = open === {{ $index }} ? null : {{ $index }}" class="w-full flex justify-between items-center px-6 py-4 text-left hover:bg-gray-50 transition">
                            <span class="font-semibold text-dark pr-4">{{ $faq['q'] }}</span>
                            <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform duration-200" :class="{ 'rotate-180': open === {{ $index }} }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="open === {{ $index }}" x-collapse x-cloak class="px-6 pb-4">
                            <p class="text-gray-500 leading-relaxed">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

{{-- CTA --}}
<section class="bg-gradient-to-r from-primary to-primary-dark py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white">Get Your Exact Moving Quote</h2>
        <p class="mt-3 text-white/80 text-lg">Free, no-obligation quotes. We respond within 2 hours during business hours.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Get Your Free Quote</a>
            <a href="tel:+14039913206" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 991-3206</a>
        </div>
    </div>
</section>
@endsection
