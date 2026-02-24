@extends('layouts.app')
@section('title', 'Moving Blog Calgary | Tips, Guides & Checklists | Unitas Movers')
@section('meta_description', 'Expert Calgary moving tips, cost guides, packing checklists, and seasonal advice from the Unitas Movers team. Free resources to make your move stress-free.')
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
                <li class="text-white font-medium">Blog</li>
            </ol>
        </nav>
        <div class="max-w-3xl">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">Moving Tips & Guides</h1>
            <p class="mt-4 text-lg text-white/80 leading-relaxed">Expert advice from Calgary's trusted movers — cost guides, packing tips, seasonal strategies, and neighborhood insights to make your move stress-free.</p>
        </div>
    </div>
</section>

{{-- Blog grid --}}
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($posts as $post)
                <a href="{{ route('blog.show', $post) }}" class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md border border-gray-100 transition">
                    <div class="h-48 bg-primary/5 flex items-center justify-center">
                        @if($post->featured_image)
                            <x-responsive-image :src="$post->featured_image" :alt="$post->title" class="w-full h-full object-cover" sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 33vw" />
                        @else
                            <svg class="w-12 h-12 text-primary/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2"></path></svg>
                        @endif
                    </div>
                    <div class="p-5">
                        <span class="text-xs font-bold text-accent uppercase tracking-wide">{{ $post->category }}</span>
                        <h2 class="mt-2 text-lg font-bold text-dark group-hover:text-primary transition">{{ $post->title }}</h2>
                        @if($post->excerpt)
                            <p class="mt-2 text-gray-500 text-sm leading-relaxed">{{ Str::limit($post->excerpt, 120) }}</p>
                        @endif
                        <p class="mt-3 text-xs text-gray-400">{{ $post->published_at?->format('M d, Y') }}</p>
                    </div>
                </a>
            @empty
                <div class="col-span-3 text-center py-12">
                    <svg class="w-16 h-16 text-gray-200 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2"></path></svg>
                    <p class="text-gray-400 text-lg">Blog posts coming soon!</p>
                    <p class="text-gray-400 text-sm mt-1">Check back for moving tips, cost guides, and Calgary-specific advice.</p>
                </div>
            @endforelse
        </div>
        <div class="mt-8">{{ $posts->links() }}</div>
    </div>
</section>

{{-- CTA --}}
<section class="bg-gradient-to-r from-primary to-primary-dark py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white">Ready to Move?</h2>
        <p class="mt-3 text-white/80 text-lg">Get a free, no-obligation quote from Calgary's trusted movers.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Get Your Free Quote</a>
            <a href="tel:+14038002747" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 800-2747</a>
        </div>
    </div>
</section>
@endsection
