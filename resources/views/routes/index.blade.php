@extends('layouts.app')
@section('title', 'Moving Routes | Long-Distance Moving Corridors | Unitas Movers')
@section('meta_description', 'Explore our long-distance moving routes from Calgary to Edmonton, Vancouver, Toronto, and more. Get pricing, distance, and drive time for each corridor.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Moving Routes</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto">Long-distance moving corridors from Calgary to destinations across Western Canada and beyond.</p>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($routes as $route)
                <a href="{{ route('routes.show', $route) }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-md border border-stone/10 transition">
                    <h2 class="text-lg font-semibold text-slate-dark group-hover:text-unitas-green transition">{{ $route->origin_city }} to {{ $route->dest_city }}</h2>
                    <div class="mt-3 flex flex-wrap gap-3 text-sm text-stone">
                        @if($route->distance_km)
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-stone/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                {{ number_format($route->distance_km) }} km
                            </span>
                        @endif
                        @if($route->drive_time_hours)
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-stone/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ $route->drive_time_hours }} hrs
                            </span>
                        @endif
                    </div>
                    @if($route->price_range_min && $route->price_range_max)
                        <p class="mt-3 text-unitas-green font-semibold text-sm">{{ $route->price_range }}</p>
                    @endif
                    <span class="mt-4 inline-block text-unitas-green text-sm font-semibold">View Details &rarr;</span>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
