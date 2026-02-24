@extends('layouts.app')
@section('title', 'Areas Served | Calgary & Surrounding Towns | Unitas Movers')
@section('meta_description', 'Unitas Movers serves all Calgary quadrants, 48 neighborhoods, and surrounding towns — Airdrie, Cochrane, Okotoks, Canmore. Free quotes — (403) 991-3206.')
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
                <li class="text-white font-medium">Areas We Serve</li>
            </ol>
        </nav>
        <div class="max-w-3xl">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">Areas We Serve in Calgary & Beyond</h1>
            <p class="mt-4 text-lg text-white/80 leading-relaxed">Proudly serving every corner of Calgary and surrounding communities within 200 km.</p>
        </div>
    </div>
</section>

{{-- Intro --}}
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <p class="text-gray-500 text-lg leading-relaxed">Unitas Movers provides <a href="{{ route('services.index') }}" class="text-primary font-semibold hover:underline">professional moving services</a> across all four Calgary quadrants, dozens of neighborhoods, and surrounding towns from <a href="{{ route('areas.show', 'airdrie') }}" class="text-primary font-semibold hover:underline">Airdrie</a> and <a href="{{ route('areas.show', 'cochrane') }}" class="text-primary font-semibold hover:underline">Cochrane</a> to <a href="{{ route('areas.show', 'canmore') }}" class="text-primary font-semibold hover:underline">Canmore</a> and <a href="{{ route('areas.show', 'banff') }}" class="text-primary font-semibold hover:underline">Banff</a>. Whether you're moving across Beltline or from Tuscany to Okotoks, our licensed and insured crew knows Calgary's streets, condo buildings, and access challenges. For <a href="{{ route('routes.index') }}" class="text-primary font-semibold hover:underline">long-distance moves</a> to Edmonton, Vancouver, or Kelowna, we cover those corridors too.</p>
        </div>

        {{-- Quadrants --}}
        @if($quadrants->count())
        <div class="mb-14">
            <h2 class="text-2xl font-extrabold text-dark mb-6">Calgary Quadrants</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                @foreach($quadrants as $area)
                    <a href="{{ route('areas.show', $area) }}" class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md border border-gray-100 transition text-center">
                        <h3 class="font-bold text-dark group-hover:text-primary transition">{{ $area->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
        @endif

        {{-- Neighborhoods --}}
        @if($neighborhoods->count())
        <div class="mb-14">
            <h2 class="text-2xl font-extrabold text-dark mb-6">Calgary Neighborhoods</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                @foreach($neighborhoods as $area)
                    <a href="{{ route('areas.show', $area) }}" class="group bg-white rounded-lg px-4 py-3 shadow-sm hover:shadow-md border border-gray-100 transition">
                        <h3 class="font-semibold text-dark text-sm group-hover:text-primary transition">{{ $area->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
        @endif

        {{-- Surrounding Towns --}}
        @if($towns->count())
        <div class="mb-14">
            <h2 class="text-2xl font-extrabold text-dark mb-6">Surrounding Towns & Cities</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($towns as $area)
                    <a href="{{ route('areas.show', $area) }}" class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md border border-gray-100 transition text-center">
                        <h3 class="font-bold text-dark group-hover:text-primary transition">{{ $area->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
        @endif

        {{-- Link to routes --}}
        <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 text-center">
            <h2 class="text-xl font-extrabold text-dark">Moving Long Distance?</h2>
            <p class="mt-2 text-gray-500">We cover corridors from Calgary to Edmonton, Vancouver, Kelowna, Toronto, and more.</p>
            <a href="{{ route('routes.index') }}" class="mt-4 inline-flex items-center text-primary font-bold hover:underline">View All Long-Distance Routes <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="bg-gradient-to-r from-primary to-primary-dark py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white">Moving Anywhere in Calgary?</h2>
        <p class="mt-3 text-white/80 text-lg">We know every neighborhood. Get a free quote for your specific route.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Get Your Free Quote</a>
            <a href="tel:+14039913206" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 991-3206</a>
        </div>
    </div>
</section>
@endsection
