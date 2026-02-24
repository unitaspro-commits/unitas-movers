@extends('layouts.app')
@section('title', $post->meta_title)
@section('meta_description', $post->meta_description)
@section('og_type', 'article')
@if($post->featured_image)
@section('og_image', asset($post->featured_image))
@endif
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
                <li><a href="{{ route('blog.index') }}" class="hover:text-white transition">Blog</a></li>
                <li><span>&rsaquo;</span></li>
                <li class="text-white font-medium">{{ Str::limit($post->title, 50) }}</li>
            </ol>
        </nav>
        <div class="max-w-3xl">
            <span class="inline-flex items-center px-3 py-1 rounded-full bg-accent/20 text-accent text-sm font-semibold mb-4">{{ ucfirst($post->category) }}</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">{{ $post->title }}</h1>
            <div class="mt-4 flex items-center space-x-4 text-white/60 text-sm">
                @if($post->published_at)
                    <time datetime="{{ $post->published_at->toIso8601String() }}">{{ $post->published_at->format('F d, Y') }}</time>
                @endif
                @if($post->body)
                    <span>&middot;</span>
                    <span>{{ ceil(str_word_count(strip_tags($post->body)) / 200) }} min read</span>
                @endif
            </div>
        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">

        {{-- Main Content --}}
        <div class="lg:col-span-2">
            @if($post->featured_image)
                <div class="mb-10 rounded-2xl overflow-hidden shadow-lg">
                    <x-responsive-image :src="$post->featured_image" :alt="$post->title" class="w-full h-auto" sizes="(max-width: 896px) 100vw, 896px" />
                </div>
            @endif

            @if($post->body)
                <div class="prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-dark prose-a:text-primary prose-a:no-underline hover:prose-a:underline prose-img:rounded-xl">{!! $post->body !!}</div>
            @endif

            {{-- Related Service CTA --}}
            @if($post->relatedService)
                <div class="mt-12 bg-gradient-to-r from-primary/5 to-accent/5 rounded-2xl p-8 border border-primary/10">
                    <h3 class="text-xl font-extrabold text-dark">Need {{ $post->relatedService->name }}?</h3>
                    <p class="mt-2 text-gray-500">Unitas Movers offers professional {{ strtolower($post->relatedService->name) }} across Calgary and surrounding areas. Licensed, insured, and affordable.</p>
                    <div class="mt-4 flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('services.show', $post->relatedService) }}" class="inline-flex items-center justify-center bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-xl font-bold transition">Learn About {{ $post->relatedService->name }} <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                        <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-6 py-3 rounded-xl font-bold transition">Get a Free Quote</a>
                    </div>
                </div>
            @endif

            {{-- Author Box --}}
            <div class="mt-12 bg-gray-50 rounded-2xl p-6 flex items-start gap-4">
                <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center shrink-0">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <div>
                    <p class="font-bold text-dark">Unitas Movers Team</p>
                    <p class="text-gray-500 text-sm mt-1">Written by the Unitas Movers team — Calgary's trusted, licensed, and insured moving company with over 2,500 successful moves. We share moving tips, cost guides, and local Calgary advice to help make your move stress-free.</p>
                </div>
            </div>

            {{-- Related Posts --}}
            @if($relatedPosts->count())
                <div class="mt-14 border-t border-gray-200 pt-12">
                    <h2 class="text-2xl font-extrabold text-dark mb-8">Related Articles</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($relatedPosts as $related)
                            <a href="{{ route('blog.show', $related) }}" class="group bg-white rounded-xl p-5 border border-gray-100 hover:border-primary/20 hover:shadow-md transition">
                                @if($related->featured_image)
                                    <div class="rounded-lg overflow-hidden mb-3 aspect-[16/10]">
                                        <x-responsive-image :src="$related->featured_image" :alt="$related->title" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" sizes="280px" />
                                    </div>
                                @endif
                                <span class="text-xs font-semibold text-accent uppercase">{{ ucfirst($related->category) }}</span>
                                <h3 class="mt-1 font-bold text-dark group-hover:text-primary transition text-sm leading-snug">{{ $related->title }}</h3>
                                @if($related->published_at)
                                    <p class="mt-2 text-gray-400 text-xs">{{ $related->published_at->format('M d, Y') }}</p>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            <x-related-pages :relatedPages="$relatedPages" />
        </div>

        {{-- Sidebar --}}
        <aside class="lg:col-span-1">
            <div class="lg:sticky lg:top-24 space-y-6">
                {{-- Quote CTA --}}
                <div class="bg-gradient-to-br from-primary to-primary-dark rounded-2xl p-6 text-white">
                    <h3 class="text-xl font-extrabold">Need Help Moving?</h3>
                    <p class="mt-2 text-white/80 text-sm">Get a free, no-obligation quote from Unitas Movers. We respond within 2 hours.</p>
                    <a href="{{ route('quote.create') }}" class="mt-4 block bg-accent hover:bg-accent/90 text-white text-center px-6 py-3 rounded-xl font-bold transition">Get a Free Quote</a>
                    <div class="mt-4 flex items-center text-white/70 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        Or call <a href="tel:+14038002747" class="font-semibold text-white ml-1">(403) 800-2747</a>
                    </div>
                </div>

                {{-- Related Service Link --}}
                @if($post->relatedService)
                <div class="bg-gray-50 rounded-2xl p-6">
                    <h3 class="font-bold text-dark text-lg mb-2">Related Service</h3>
                    <a href="{{ route('services.show', $post->relatedService) }}" class="flex items-center text-primary hover:underline font-semibold text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        {{ $post->relatedService->name }}
                    </a>
                </div>
                @endif

                {{-- Related Area Link --}}
                @if($post->relatedArea)
                <div class="bg-gray-50 rounded-2xl p-6">
                    <h3 class="font-bold text-dark text-lg mb-2">Related Area</h3>
                    <a href="{{ route('areas.show', $post->relatedArea) }}" class="flex items-center text-primary hover:underline font-semibold text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        {{ $post->relatedArea->name }}
                    </a>
                </div>
                @endif

                {{-- Quick Trust Points --}}
                <div class="bg-white border border-gray-200 rounded-2xl p-6">
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

{{-- Full-Width Bottom CTA --}}
<section class="bg-gradient-to-r from-primary to-primary-dark py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white">Need Help With Your Move?</h2>
        <p class="mt-3 text-white/80 text-lg">Get a free, no-obligation quote from Unitas Movers today.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Get Your Free Quote</a>
            <a href="tel:+14038002747" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 800-2747</a>
        </div>
    </div>
</section>
@endsection
