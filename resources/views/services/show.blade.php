@extends('layouts.app')
@section('title', $service->meta_title)
@section('meta_description', $service->meta_description)
@section('content')
<section class="bg-alpine-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/60 text-sm mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a> &rsaquo;
            <a href="{{ route('services.index') }}" class="hover:text-white">Services</a> &rsaquo;
            <span class="text-white">{{ $service->name }}</span>
        </nav>
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">{{ $service->h1 }}</h1>
        @if($service->hero_text)
            <p class="mt-4 text-white/80 max-w-3xl">{{ $service->hero_text }}</p>
        @endif
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($service->body)
            <div class="prose prose-lg max-w-none">{!! $service->body !!}</div>
        @endif
        @if($service->faq_json && count($service->faq_json) > 0)
            <div class="mt-12">
                <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Frequently Asked Questions</h2>
                <div class="space-y-4">
                    @foreach($service->faq_json as $faq)
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
        <div class="mt-12 bg-forest rounded-xl p-8 text-center">
            <h2 class="text-2xl font-serif font-bold text-white">Ready to Book Your {{ $service->name }}?</h2>
            <p class="mt-2 text-white/80">Get a free, no-obligation quote today.</p>
            <a href="{{ route('quote.create') }}" class="mt-4 inline-block bg-meadow hover:bg-alpine-green text-white px-8 py-3 rounded-lg font-bold transition">Get Your Free Quote</a>
        </div>
    </div>
</section>
@endsection
