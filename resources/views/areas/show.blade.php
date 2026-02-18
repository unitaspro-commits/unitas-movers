@extends('layouts.app')
@section('title', $area->meta_title)
@section('meta_description', $area->meta_description)
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/60 text-sm mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a> &rsaquo;
            <a href="{{ route('areas.index') }}" class="hover:text-white">Areas</a> &rsaquo;
            <span class="text-white">{{ $area->name }}</span>
        </nav>
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">{{ $area->h1 }}</h1>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($area->body)
            <div class="prose prose-lg max-w-none">{!! $area->body !!}</div>
        @endif
        @if($area->children->count())
            <div class="mt-12">
                <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Sub-Areas</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach($area->children as $child)
                        <a href="{{ route('areas.show', $child) }}" class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md border border-stone/10 transition">
                            <h3 class="font-semibold text-slate-dark text-sm">{{ $child->name }}</h3>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
        <x-related-pages :relatedPages="$relatedPages" />

        <div class="mt-12 bg-forest rounded-xl p-8 text-center">
            <h2 class="text-2xl font-serif font-bold text-white">Moving in {{ $area->name }}?</h2>
            <p class="mt-2 text-white/80">Get a free quote for your move today.</p>
            <a href="{{ route('quote.create') }}" class="mt-4 inline-block bg-meadow hover:bg-unitas-green text-white px-8 py-3 rounded-lg font-bold transition">Get Your Free Quote</a>
        </div>
    </div>
</section>
@endsection
