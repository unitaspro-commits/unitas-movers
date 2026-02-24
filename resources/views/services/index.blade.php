@extends('layouts.app')
@section('title', 'Moving Services Calgary | Local & Long-Distance | Unitas Movers')
@section('meta_description', 'Calgary moving services — local, long-distance, commercial, packing, piano, senior, and same-day moves. Licensed & insured. Free quotes — (403) 991-3206.')
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
                <li class="text-white font-medium">Services</li>
            </ol>
        </nav>
        <div class="max-w-3xl">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">Moving Services in Calgary</h1>
            <p class="mt-4 text-lg text-white/80 leading-relaxed">Professional, affordable moving services for every need — from studio apartments to corporate offices, across town or across the country.</p>
        </div>
    </div>
</section>

{{-- Trust Bar --}}
<section class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <div class="flex flex-wrap justify-center gap-x-8 gap-y-3 text-sm text-gray-500">
            <span class="flex items-center"><svg class="w-4 h-4 text-accent mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>Fully Licensed & Insured</span>
            <span class="flex items-center"><svg class="w-4 h-4 text-star mr-1.5" fill="currentColor" viewBox="0 0 24 24"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>4.9★ Google Rating</span>
            <span class="flex items-center"><svg class="w-4 h-4 text-primary mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>Same-Day Available</span>
            <span class="flex items-center"><svg class="w-4 h-4 text-accent mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>No Hidden Fees</span>
        </div>
    </div>
</section>

{{-- Intro Content --}}
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <p class="text-gray-500 text-lg leading-relaxed">Unitas Movers provides a complete range of moving services across Calgary and surrounding communities. Whether you need a <a href="{{ route('services.show', 'local-moving') }}" class="text-primary font-semibold hover:underline">local move</a> within the same neighborhood, a <a href="{{ route('services.show', 'long-distance-moving') }}" class="text-primary font-semibold hover:underline">long-distance move</a> to Edmonton or Vancouver, <a href="{{ route('services.show', 'packing-unpacking') }}" class="text-primary font-semibold hover:underline">professional packing</a>, or specialized handling for a <a href="{{ route('services.show', 'piano-moving') }}" class="text-primary font-semibold hover:underline">piano</a> or fragile items — our licensed, insured crew handles it all. Every service includes a fully equipped truck, furniture padding, and our no-hidden-fees guarantee.</p>
        </div>

        {{-- Services Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $service)
                <a href="{{ route('services.show', $service) }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-md border border-gray-100 transition">
                    <h2 class="text-lg font-bold text-dark group-hover:text-primary transition">{{ $service->name }}</h2>
                    <p class="mt-2 text-gray-500 text-sm leading-relaxed">{{ Str::limit($service->meta_description, 120) }}</p>
                    <span class="mt-4 inline-flex items-center text-primary text-sm font-bold">Learn More <svg class="w-3.5 h-3.5 ml-1 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></span>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="bg-gradient-to-r from-primary to-primary-dark py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white">Not Sure Which Service You Need?</h2>
        <p class="mt-3 text-white/80 text-lg">Tell us about your move and we'll recommend the right services for your situation.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Get Your Free Quote</a>
            <a href="tel:+14039913206" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 991-3206</a>
        </div>
    </div>
</section>
@endsection
