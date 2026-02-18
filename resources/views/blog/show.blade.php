@extends('layouts.app')
@section('title', $post->meta_title)
@section('meta_description', $post->meta_description)
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/60 text-sm mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a> &rsaquo;
            <a href="{{ route('blog.index') }}" class="hover:text-white">Blog</a> &rsaquo;
            <span class="text-white">{{ Str::limit($post->title, 40) }}</span>
        </nav>
        <span class="text-meadow text-sm font-semibold uppercase">{{ $post->category }}</span>
        <h1 class="mt-2 text-3xl lg:text-4xl font-serif font-bold text-white">{{ $post->title }}</h1>
        <p class="mt-4 text-white/60 text-sm">{{ $post->published_at?->format('F d, Y') }}</p>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($post->featured_image)
            <div class="mb-8 rounded-xl overflow-hidden">
                <x-responsive-image :src="$post->featured_image" :alt="$post->title" class="w-full h-auto" sizes="(max-width: 896px) 100vw, 896px" />
            </div>
        @endif
        @if($post->body)
            <div class="prose prose-lg max-w-none">{!! $post->body !!}</div>
        @endif
        @if($relatedPosts->count())
            <div class="mt-16 border-t border-stone/10 pt-12">
                <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Related Articles</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedPosts as $related)
                        <a href="{{ route('blog.show', $related) }}" class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md border border-stone/10 transition">
                            <span class="text-xs font-semibold text-meadow uppercase">{{ $related->category }}</span>
                            <h3 class="mt-2 font-semibold text-slate-dark group-hover:text-unitas-green transition">{{ $related->title }}</h3>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
        <x-related-pages :relatedPages="$relatedPages" />

        <div class="mt-12 bg-forest rounded-xl p-8 text-center">
            <h2 class="text-2xl font-serif font-bold text-white">Need Help With Your Move?</h2>
            <p class="mt-2 text-white/80">Get a free, no-obligation quote from Unitas Movers today.</p>
            <a href="{{ route('quote.create') }}" class="mt-4 inline-block bg-meadow hover:bg-unitas-green text-white px-8 py-3 rounded-lg font-bold transition">Get Your Free Quote</a>
        </div>
    </div>
</section>
@endsection
