@extends('layouts.app')
@section('title', $area->meta_title)
@section('meta_description', $area->meta_description)
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
                <li><a href="{{ route('areas.index') }}" class="hover:text-white transition">Areas</a></li>
                @if($area->parent)
                    <li><span>&rsaquo;</span></li>
                    <li><a href="{{ route('areas.show', $area->parent) }}" class="hover:text-white transition">{{ $area->parent->name }}</a></li>
                @endif
                <li><span>&rsaquo;</span></li>
                <li class="text-white font-medium">{{ $area->name }}</li>
            </ol>
        </nav>
        <div class="max-w-3xl">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">{{ $area->h1 }}</h1>
            <p class="mt-4 text-lg text-white/80 leading-relaxed">Professional, affordable moving services in {{ $area->name }}. Licensed, insured, same-day available.</p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg shadow-accent/25">
                    Get a Free Quote
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
                <a href="tel:+14038002747" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    (403) 800-2747
                </a>
            </div>
        </div>
        {{-- Quick stats for towns --}}
        @if($area->area_type === 'town' && $area->population)
            <div class="mt-8 flex flex-wrap gap-6 text-white/70 text-sm">
                <span class="flex items-center"><svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>Population: {{ number_format($area->population) }}</span>
            </div>
        @endif
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">

        {{-- Main Content --}}
        <div class="lg:col-span-2">

            {{-- Area Body Content --}}
            @if($area->body)
                <div class="prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-dark prose-a:text-primary prose-a:no-underline hover:prose-a:underline">{!! $area->body !!}</div>
            @endif

            {{-- Sub-Areas / Neighborhoods (for quadrant hubs) --}}
            @if($area->children->count())
                <div class="mt-14">
                    <h2 class="text-2xl font-extrabold text-dark mb-6">
                        @if($area->area_type === 'quadrant')
                            Neighborhoods in {{ $area->name }}
                        @else
                            Areas Within {{ $area->name }}
                        @endif
                    </h2>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        @foreach($area->children->sortBy('name') as $child)
                            <a href="{{ route('areas.show', $child) }}" class="group bg-white rounded-xl p-4 border border-gray-100 hover:border-primary/30 hover:shadow-md transition">
                                <h3 class="font-semibold text-dark text-sm group-hover:text-primary transition">{{ $child->name }}</h3>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- Services Available --}}
            <div class="mt-14">
                <h2 class="text-2xl font-extrabold text-dark mb-6">Moving Services in {{ $area->name }}</h2>
                <p class="text-gray-500 mb-6">All of our professional moving services are available in {{ $area->name }}.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($services as $service)
                        <a href="{{ route('services.show', $service) }}" class="group flex items-center bg-white rounded-xl p-4 border border-gray-100 hover:border-primary/30 hover:shadow-md transition">
                            <div class="w-10 h-10 bg-primary/10 group-hover:bg-primary rounded-lg flex items-center justify-center mr-4 shrink-0 transition-colors">
                                <svg class="w-5 h-5 text-primary group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-dark text-sm group-hover:text-primary transition">{{ $service->name }}</h3>
                                <p class="text-gray-500 text-xs mt-0.5">{{ Str::limit($service->meta_description, 60) }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Local Reviews --}}
            @if($reviews->count())
                <div class="mt-14">
                    <h2 class="text-2xl font-extrabold text-dark mb-8">Customer Reviews — {{ $area->name }}</h2>
                    <div class="space-y-4">
                        @foreach($reviews as $review)
                            <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm">
                                <div class="flex items-center gap-1 mb-2">
                                    @for($i = 1; $i <= 5; $i++)
                                        <svg class="w-4 h-4 {{ $i <= $review->rating ? 'text-star' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 24 24"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    @endfor
                                </div>
                                <p class="text-gray-600 leading-relaxed">{{ $review->body }}</p>
                                <p class="mt-3 text-sm font-semibold text-dark">— {{ $review->customer_name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- FAQ --}}
            @if($area->faq_json && count($area->faq_json) > 0)
                <div class="mt-14">
                    <h2 class="text-2xl font-extrabold text-dark mb-8">Frequently Asked Questions — {{ $area->name }}</h2>
                    <div class="space-y-3" x-data="{ open: null }">
                        @foreach($area->faq_json as $index => $faq)
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

            {{-- Nearby Areas --}}
            <x-related-pages :relatedPages="$relatedPages" />
        </div>

        {{-- Sidebar --}}
        <aside class="lg:col-span-1">
            <div class="lg:sticky lg:top-24 space-y-6">
                <div class="bg-gradient-to-br from-primary to-primary-dark rounded-2xl p-6 text-white">
                    <h3 class="text-xl font-extrabold">Moving in {{ $area->name }}?</h3>
                    <p class="mt-2 text-white/80 text-sm">Get a free, no-obligation quote for your move.</p>
                    <a href="{{ route('quote.create') }}" class="mt-4 block bg-accent hover:bg-accent/90 text-white text-center px-6 py-3 rounded-xl font-bold transition">Request Quote</a>
                    <div class="mt-4 flex items-center text-white/70 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        Or call <a href="tel:+14038002747" class="font-semibold text-white ml-1">(403) 800-2747</a>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-6">
                    <h3 class="font-bold text-dark text-lg mb-3">Why Unitas Movers?</h3>
                    <ul class="space-y-3 text-sm text-gray-500">
                        <li class="flex items-start"><svg class="w-4 h-4 text-accent mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Fully licensed & insured</li>
                        <li class="flex items-start"><svg class="w-4 h-4 text-accent mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Transparent pricing — no hidden fees</li>
                        <li class="flex items-start"><svg class="w-4 h-4 text-accent mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Same-day, evening & weekend moves</li>
                        <li class="flex items-start"><svg class="w-4 h-4 text-accent mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>2,500+ moves completed</li>
                        <li class="flex items-start"><svg class="w-4 h-4 text-accent mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>4.9★ Google rating</li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</div>

{{-- Full-Width CTA --}}
<section class="bg-gradient-to-r from-primary to-primary-dark py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white">Ready for Your Move in {{ $area->name }}?</h2>
        <p class="mt-3 text-white/80 text-lg">Get a free, no-obligation quote from Unitas Movers today.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Get Your Free Quote</a>
            <a href="tel:+14038002747" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 800-2747</a>
        </div>
    </div>
</section>
@endsection
