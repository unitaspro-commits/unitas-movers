@extends('layouts.app')
@section('title', $route->meta_title)
@section('meta_description', $route->meta_description)
@section('robots', 'noindex, nofollow')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/60 text-sm mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a> &rsaquo;
            <a href="{{ route('routes.index') }}" class="hover:text-white">Routes</a> &rsaquo;
            <span class="text-white">{{ $route->origin_city }} to {{ $route->dest_city }}</span>
        </nav>
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">{{ $route->h1 }}</h1>
    </div>
</section>

{{-- Quick Facts Bar --}}
<section class="bg-white border-b border-stone/10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
            @if($route->distance_km)
            <div>
                <p class="text-sm text-stone">Distance</p>
                <p class="text-lg font-bold text-slate-dark">{{ number_format($route->distance_km) }} km</p>
            </div>
            @endif
            @if($route->drive_time_hours)
            <div>
                <p class="text-sm text-stone">Drive Time</p>
                <p class="text-lg font-bold text-slate-dark">{{ $route->drive_time_hours }} hours</p>
            </div>
            @endif
            @if($route->price_range_min && $route->price_range_max)
            <div>
                <p class="text-sm text-stone">Price Range</p>
                <p class="text-lg font-bold text-unitas-green">{{ $route->price_range }}</p>
            </div>
            @endif
            @if($route->is_bidirectional)
            <div>
                <p class="text-sm text-stone">Direction</p>
                <p class="text-lg font-bold text-slate-dark">Both Ways</p>
            </div>
            @endif
        </div>
    </div>
</section>

<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Route Overview --}}
        @if($route->route_overview)
            <div class="prose prose-lg max-w-none">{!! $route->route_overview !!}</div>
        @endif

        {{-- Cost Breakdown --}}
        @if($route->cost_breakdown)
            <div class="mt-12">
                <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Cost Breakdown</h2>
                <div class="prose prose-lg max-w-none">{!! $route->cost_breakdown !!}</div>
            </div>
        @endif

        {{-- Destination Guide --}}
        @if($route->destination_guide)
            <div class="mt-12">
                <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Destination Guide</h2>
                <div class="prose prose-lg max-w-none">{!! $route->destination_guide !!}</div>
            </div>
        @endif

        {{-- FAQs --}}
        @if($route->faq_json && count($route->faq_json) > 0)
            <div class="mt-12">
                <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Frequently Asked Questions</h2>
                <div class="space-y-4">
                    @foreach($route->faq_json as $faq)
                        <details class="bg-white rounded-lg p-5 shadow-sm border border-stone/10 group">
                            <summary class="font-semibold text-slate-dark cursor-pointer list-none flex justify-between items-center">
                                {{ $faq['question'] }}
                                <svg class="w-5 h-5 text-stone group-open:rotate-180 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <p class="mt-3 text-stone">{{ $faq['answer'] }}</p>
                        </details>
                    @endforeach
                </div>
            </div>
        @endif

        <x-related-pages :relatedPages="$relatedPages" />

        <div class="mt-12 bg-forest rounded-xl p-8 text-center">
            <h2 class="text-2xl font-serif font-bold text-white">Moving from {{ $route->origin_city }} to {{ $route->dest_city }}?</h2>
            <p class="mt-2 text-white/80">Get a free, no-obligation quote for your long-distance move.</p>
            <a href="{{ route('quote.create') }}" class="mt-4 inline-block bg-meadow hover:bg-unitas-green text-white px-8 py-3 rounded-lg font-bold transition">Get Your Free Quote</a>
        </div>
    </div>
</section>
@endsection
