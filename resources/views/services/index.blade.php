@extends('layouts.app')
@section('title', 'Moving Services Calgary | Alpine Movers')
@section('meta_description', 'Full range of moving services in Calgary. Local, long-distance, commercial, packing, piano moving, and more. Get a free quote today.')
@section('content')
<section class="bg-alpine-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Our Moving Services</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto">Professional, affordable moving services for every need.</p>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $service)
                <a href="{{ route('services.show', $service) }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-md border border-stone/10 transition">
                    <h2 class="text-lg font-semibold text-slate-dark group-hover:text-alpine-green transition">{{ $service->name }}</h2>
                    <p class="mt-2 text-stone text-sm">{{ $service->meta_description }}</p>
                    <span class="mt-4 inline-block text-alpine-green text-sm font-semibold">Learn More &rarr;</span>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
