@extends('layouts.app')
@section('title', $route->meta_title)
@section('meta_description', $route->meta_description)
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')

{{-- Hero Section with Breadcrumb --}}
<section class="bg-gradient-to-br from-primary to-primary-dark py-14 lg:py-20 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/4"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/50 text-sm mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                <li><span>&rsaquo;</span></li>
                <li><a href="{{ route('routes.index') }}" class="hover:text-white transition">Routes</a></li>
                <li><span>&rsaquo;</span></li>
                <li class="text-white font-medium">{{ $route->origin_city }} to {{ $route->dest_city }}</li>
            </ol>
        </nav>
        <div class="max-w-3xl">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">{{ $route->h1 }}</h1>
            <p class="mt-4 text-lg text-white/80 leading-relaxed">Professional long-distance movers from {{ $route->origin_city }} to {{ $route->dest_city }}. Fully licensed, insured, and affordable.</p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <a href="{{ route('quote.create') }}" onclick="trackEvent('cta_click', {label: 'route_hero_quote'})" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg shadow-accent/25">Get a Free Quote <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                <a href="tel:+14039913206" onclick="trackEvent('phone_click', {location: 'route_hero'})" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition backdrop-blur-sm"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 991-3206</a>
            </div>
        </div>
    </div>
</section>

{{-- Trust Bar --}}
<section class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <div class="flex flex-wrap justify-center gap-x-8 gap-y-3 text-sm text-gray-500">
            <span class="flex items-center"><svg class="w-4 h-4 text-accent mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>Fully Insured</span>
            <span class="flex items-center"><svg class="w-4 h-4 text-star mr-1.5" fill="currentColor" viewBox="0 0 24 24"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>4.9★ Google Rating</span>
            <span class="flex items-center"><svg class="w-4 h-4 text-primary mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>Same-Day Available</span>
            <span class="flex items-center"><svg class="w-4 h-4 text-accent mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>No Hidden Fees</span>
        </div>
    </div>
</section>

{{-- Quick Facts Bar --}}
<section class="bg-gray-50 border-b border-gray-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-center">
            @if($route->distance_km)
            <div><p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Distance</p><p class="text-xl font-extrabold text-dark mt-1">{{ number_format($route->distance_km) }} km</p></div>
            @endif
            @if($route->drive_time_hours)
            <div><p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Drive Time</p><p class="text-xl font-extrabold text-dark mt-1">{{ $route->drive_time_hours }} hours</p></div>
            @endif
            @if($route->price_range_min && $route->price_range_max)
            <div><p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Price Range</p><p class="text-xl font-extrabold text-primary mt-1">{{ $route->price_range }}</p></div>
            @endif
            @if($route->highway_name)
            <div><p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Highway</p><p class="text-xl font-extrabold text-dark mt-1">{{ $route->highway_number ?? $route->highway_name }}</p></div>
            @endif
            @if($route->fuel_cost_estimate)
            <div><p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Est. Fuel</p><p class="text-xl font-extrabold text-dark mt-1">{{ $route->fuel_estimate_display }}</p></div>
            @endif
            @if($route->elevation_change)
            <div><p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Elevation</p><p class="text-xl font-extrabold text-dark mt-1">{{ $route->elevation_change }}</p></div>
            @endif
        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">
        {{-- Main Content --}}
        <div class="lg:col-span-2">
            @if($route->route_overview)
                <div class="prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-dark prose-a:text-primary prose-a:no-underline hover:prose-a:underline">{!! $route->route_overview !!}</div>
            @endif

            {{-- Route & Road Information --}}
            @if($route->highway_name || $route->road_conditions_note)
                <div class="mt-14">
                    <h2 class="text-2xl font-extrabold text-dark mb-6">Route & Road Information</h2>
                    @if($route->highway_name)
                        <div class="bg-blue-50 rounded-xl p-5 border border-blue-100 mb-4">
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                                <h3 class="font-bold text-dark">{{ $route->highway_name }}</h3>
                            </div>
                            <p class="text-gray-600 text-sm">Primary highway connecting {{ $route->origin_city }} and {{ $route->dest_city }}.</p>
                        </div>
                    @endif
                    @if($route->road_conditions_note)
                        <div class="prose prose-sm max-w-none text-gray-600">
                            <p>{{ $route->road_conditions_note }}</p>
                        </div>
                    @endif
                </div>
            @endif

            {{-- Seasonal Moving Tips --}}
            @if($route->seasonal_tips)
                <div class="mt-14">
                    <h2 class="text-2xl font-extrabold text-dark mb-6">Seasonal Moving Tips — {{ $route->origin_city }} to {{ $route->dest_city }}</h2>
                    <div class="bg-amber-50 rounded-xl p-6 border border-amber-100">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-amber-500 mr-3 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            <p class="text-gray-700 leading-relaxed">{{ $route->seasonal_tips }}</p>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Communities Along the Way --}}
            @if($route->notable_stops)
                <div class="mt-14">
                    <h2 class="text-2xl font-extrabold text-dark mb-6">Communities Along the Way</h2>
                    <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-primary mr-3 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <p class="text-gray-700 leading-relaxed">{{ $route->notable_stops }}</p>
                                <p class="mt-2 text-sm text-gray-500">We can arrange pickups or drop-offs at any of these communities along the {{ $route->origin_city }} to {{ $route->dest_city }} route.</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Housing Comparison --}}
            @if($route->origin_housing_data && $route->dest_housing_data)
                <div class="mt-14">
                    <h2 class="text-2xl font-extrabold text-dark mb-6">Housing Comparison: {{ $route->origin_city }} vs {{ $route->dest_city }}</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl p-5 border border-gray-200 shadow-sm">
                            <h3 class="font-bold text-dark text-lg mb-3">{{ $route->origin_city }}</h3>
                            <ul class="space-y-2 text-sm">
                                @if($route->origin_housing_data['avg_price'] ?? false)
                                <li class="flex justify-between"><span class="text-gray-500">Avg Home Price</span><span class="font-semibold text-dark">{{ $route->origin_housing_data['avg_price'] }}</span></li>
                                @endif
                                @if($route->origin_housing_data['dominant_type'] ?? false)
                                <li class="flex justify-between"><span class="text-gray-500">Common Type</span><span class="font-semibold text-dark">{{ $route->origin_housing_data['dominant_type'] }}</span></li>
                                @endif
                                @if($route->origin_housing_data['avg_sqft'] ?? false)
                                <li class="flex justify-between"><span class="text-gray-500">Avg Size</span><span class="font-semibold text-dark">{{ $route->origin_housing_data['avg_sqft'] }} sq ft</span></li>
                                @endif
                            </ul>
                        </div>
                        <div class="bg-white rounded-xl p-5 border border-primary/20 shadow-sm ring-1 ring-primary/10">
                            <h3 class="font-bold text-primary text-lg mb-3">{{ $route->dest_city }}</h3>
                            <ul class="space-y-2 text-sm">
                                @if($route->dest_housing_data['avg_price'] ?? false)
                                <li class="flex justify-between"><span class="text-gray-500">Avg Home Price</span><span class="font-semibold text-dark">{{ $route->dest_housing_data['avg_price'] }}</span></li>
                                @endif
                                @if($route->dest_housing_data['dominant_type'] ?? false)
                                <li class="flex justify-between"><span class="text-gray-500">Common Type</span><span class="font-semibold text-dark">{{ $route->dest_housing_data['dominant_type'] }}</span></li>
                                @endif
                                @if($route->dest_housing_data['avg_sqft'] ?? false)
                                <li class="flex justify-between"><span class="text-gray-500">Avg Size</span><span class="font-semibold text-dark">{{ $route->dest_housing_data['avg_sqft'] }} sq ft</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            @if($route->cost_breakdown)
                <div class="mt-14">
                    <h2 class="text-2xl font-extrabold text-dark mb-6">{{ $route->origin_city }} to {{ $route->dest_city }} Moving Costs</h2>
                    <div class="prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-dark">{!! $route->cost_breakdown !!}</div>
                </div>
            @endif

            @if($route->destination_guide)
                <div class="mt-14">
                    <h2 class="text-2xl font-extrabold text-dark mb-6">Moving to {{ $route->dest_city }} — What You Need to Know</h2>
                    <div class="prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-dark">{!! $route->destination_guide !!}</div>
                </div>
            @endif

            {{-- Why Choose Unitas --}}
            <div class="mt-14">
                <h2 class="text-2xl font-extrabold text-dark mb-8">Why Choose Unitas for Your {{ $route->origin_city }} to {{ $route->dest_city }} Move</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @php $distLabel = $route->distance_km ? number_format($route->distance_km) . ' km' : 'long-distance'; @endphp
                    @foreach([
                        ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Fully Licensed & Insured', 'desc' => "Your belongings are covered by comprehensive insurance for the entire {$distLabel} journey."],
                        ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Transparent Long-Distance Pricing', 'desc' => 'All-inclusive quotes with no hidden fees, fuel surcharges, or surprise costs on arrival.'],
                        ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4', 'title' => 'Experienced Long-Distance Crew', 'desc' => 'Professional movers trained in highway transport, careful loading, and long-distance logistics.'],
                        ['icon' => 'M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4', 'title' => 'Storage Options Available', 'desc' => 'Need temporary storage between move dates? We offer secure solutions to fit your timeline.'],
                    ] as $item)
                        <div class="bg-gray-50 rounded-xl p-5 border border-gray-100">
                            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center mb-3">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"></path></svg>
                            </div>
                            <h3 class="font-bold text-dark">{{ $item['title'] }}</h3>
                            <p class="mt-1 text-gray-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            @if($route->faq_json && count($route->faq_json) > 0)
                <div class="mt-14">
                    <h2 class="text-2xl font-extrabold text-dark mb-8">{{ $route->origin_city }} to {{ $route->dest_city }} — Frequently Asked Questions</h2>
                    <div class="space-y-3" x-data="{ open: null }">
                        @foreach($route->faq_json as $index => $faq)
                            <div class="border border-gray-200 rounded-xl overflow-hidden">
                                <button @click="open = open === {{ $index }} ? null : {{ $index }}" class="w-full flex justify-between items-center px-6 py-4 text-left hover:bg-gray-50 transition">
                                    <span class="font-semibold text-dark pr-4">{{ $faq['question'] }}</span>
                                    <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform duration-200" :class="{ 'rotate-180': open === {{ $index }} }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="open === {{ $index }}" x-collapse x-cloak class="px-6 pb-4">
                                    <p class="text-gray-500 leading-relaxed">{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <x-related-pages :relatedPages="$relatedPages" />
        </div>

        {{-- Sidebar --}}
        <aside class="lg:col-span-1">
            <div class="lg:sticky lg:top-24 space-y-6">
                <div class="bg-gradient-to-br from-primary to-primary-dark rounded-2xl p-6 text-white">
                    <h3 class="text-xl font-extrabold">Get Your {{ $route->origin_city }} to {{ $route->dest_city }} Quote</h3>
                    <p class="mt-2 text-white/80 text-sm">Free, no-obligation estimate. We respond within 2 hours.</p>
                    <a href="{{ route('quote.create') }}" onclick="trackEvent('cta_click', {label: 'route_sidebar_quote'})" class="mt-4 block bg-accent hover:bg-accent/90 text-white text-center px-6 py-3 rounded-xl font-bold transition">Request Quote</a>
                    <div class="mt-4 flex items-center text-white/70 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        Or call <a href="tel:+14039913206" onclick="trackEvent('phone_click', {location: 'route_sidebar'})" class="font-semibold text-white ml-1">(403) 991-3206</a>
                    </div>
                </div>
                @if($route->distance_km)
                <div class="bg-gray-50 rounded-2xl p-6">
                    <h3 class="font-bold text-dark text-lg mb-4">Route Details</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex justify-between"><span class="text-gray-500">Distance</span><span class="font-semibold text-dark">{{ number_format($route->distance_km) }} km</span></li>
                        @if($route->drive_time_hours)<li class="flex justify-between"><span class="text-gray-500">Drive Time</span><span class="font-semibold text-dark">~{{ $route->drive_time_hours }} hrs</span></li>@endif
                        @if($route->price_range_min && $route->price_range_max)<li class="flex justify-between"><span class="text-gray-500">Starting From</span><span class="font-semibold text-primary">{{ $route->price_range }}</span></li>@endif
                        <li class="flex justify-between"><span class="text-gray-500">Service</span><span class="font-semibold text-dark">Door to Door</span></li>
                        @if($route->popular_move_months)
                        <li class="flex justify-between"><span class="text-gray-500">Best Months</span><span class="font-semibold text-dark text-xs">{{ $route->popular_move_months }}</span></li>
                        @endif
                    </ul>
                    @if($route->backhaul_discount)
                    <div class="mt-4 bg-green-50 rounded-lg px-3 py-2 text-xs text-green-700 font-medium flex items-center">
                        <svg class="w-4 h-4 mr-1.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                        Backhaul discount may be available on this route
                    </div>
                    @endif
                </div>
                @endif
                <div class="bg-white border border-gray-200 rounded-2xl p-6">
                    <h3 class="font-bold text-dark text-lg mb-3">Why Unitas Movers?</h3>
                    <ul class="space-y-3 text-sm text-gray-500">
                        <li class="flex items-start"><svg class="w-4 h-4 text-accent mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Fully licensed & insured</li>
                        <li class="flex items-start"><svg class="w-4 h-4 text-accent mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Transparent pricing — no hidden fees</li>
                        <li class="flex items-start"><svg class="w-4 h-4 text-accent mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Professional packing included</li>
                        <li class="flex items-start"><svg class="w-4 h-4 text-accent mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>2,500+ moves completed</li>
                        <li class="flex items-start"><svg class="w-4 h-4 text-accent mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>4.9★ Google rating</li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</div>

{{-- Full-Width Bottom CTA --}}
<section class="bg-gradient-to-r from-primary to-primary-dark py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white">Ready to Move from {{ $route->origin_city }} to {{ $route->dest_city }}?</h2>
        <p class="mt-3 text-white/80 text-lg">Get a free, no-obligation quote. We respond within 2 hours during business hours.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" onclick="trackEvent('cta_click', {label: 'route_bottom_quote'})" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Get Your Free Quote</a>
            <a href="tel:+14039913206" onclick="trackEvent('phone_click', {location: 'route_bottom'})" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 991-3206</a>
        </div>
    </div>
</section>
@endsection
