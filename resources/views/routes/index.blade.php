@extends('layouts.app')
@section('title', 'Long-Distance Moving Routes from Calgary | Unitas Movers')
@section('meta_description', 'Long-distance moving from Calgary to Edmonton, Vancouver, Kelowna, Toronto & more. Pricing, distance, and drive times. Free quotes — (403) 800-2747.')
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
                <li class="text-white font-medium">Moving Routes</li>
            </ol>
        </nav>
        <div class="max-w-3xl">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">Long-Distance Moving Routes from Calgary</h1>
            <p class="mt-4 text-lg text-white/80 leading-relaxed">Professional long-distance moving across Western Canada and beyond — from short hops to Airdrie to cross-country moves to Toronto.</p>
        </div>
    </div>
</section>

{{-- Intro --}}
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <p class="text-gray-500 text-lg leading-relaxed">Unitas Movers handles <a href="{{ route('services.show', 'long-distance-moving') }}" class="text-primary font-semibold hover:underline">long-distance moves</a> from Calgary to destinations across Alberta, British Columbia, Saskatchewan, and Ontario. Every long-distance move includes a dedicated crew, full furniture padding, comprehensive insurance coverage, and transparent flat-rate pricing — no hourly surprises on a 300 km move. Need <a href="{{ route('services.show', 'packing-unpacking') }}" class="text-primary font-semibold hover:underline">packing services</a> or <a href="{{ route('services.show', 'storage-solutions') }}" class="text-primary font-semibold hover:underline">storage</a> at the destination? We handle that too.</p>
        </div>

        {{-- Routes Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($routes as $route)
                <a href="{{ route('routes.show', $route) }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-md border border-gray-100 transition">
                    <h2 class="text-lg font-bold text-dark group-hover:text-primary transition">{{ $route->origin_city }} to {{ $route->dest_city }}</h2>
                    <div class="mt-3 flex flex-wrap gap-3 text-sm text-gray-500">
                        @if($route->distance_km)
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                {{ number_format($route->distance_km) }} km
                            </span>
                        @endif
                        @if($route->drive_time_hours)
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ $route->drive_time_hours }} hrs
                            </span>
                        @endif
                    </div>
                    @if($route->price_range_min && $route->price_range_max)
                        <p class="mt-3 text-primary font-bold text-sm">{{ $route->price_range }}</p>
                    @endif
                    <span class="mt-4 inline-flex items-center text-primary text-sm font-bold">View Route Details <svg class="w-3.5 h-3.5 ml-1 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></span>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="bg-gradient-to-r from-primary to-primary-dark py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white">Planning a Long-Distance Move?</h2>
        <p class="mt-3 text-white/80 text-lg">Get a flat-rate quote for your specific route. No hourly surprises — just one clear price.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Get Your Free Quote</a>
            <a href="tel:+14038002747" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 800-2747</a>
        </div>
    </div>
</section>
@endsection
