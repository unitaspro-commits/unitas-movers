@extends('layouts.app')
@section('title', 'Frequently Asked Questions | Unitas Movers')
@section('meta_description', 'Answers to common questions about Unitas Movers — pricing, moving day, services, packing, insurance, booking, and more. Calgary\'s trusted moving company.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/60 text-sm mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a> &rsaquo;
            <span class="text-white">FAQ</span>
        </nav>
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Frequently Asked Questions</h1>
        <p class="mt-3 text-white/80 max-w-2xl">Find answers to the most common questions about our moving services.</p>
    </div>
</section>

{{-- Category Navigation --}}
<div class="sticky top-[72px] z-30 bg-white border-b border-stone/10 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex overflow-x-auto gap-1 py-3 scrollbar-hide">
            @foreach($faqsByCategory as $category => $faqs)
                <a href="#{{ Str::slug($category) }}" class="shrink-0 px-4 py-2 rounded-lg text-sm font-medium text-stone hover:text-slate-dark hover:bg-cream/50 transition capitalize">{{ $category }}</a>
            @endforeach
        </nav>
    </div>
</div>

<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        @foreach($faqsByCategory as $category => $faqs)
            <div id="{{ Str::slug($category) }}" class="mb-12 scroll-mt-36">
                <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6 capitalize">{{ $category }}</h2>
                <div class="space-y-4">
                    @foreach($faqs as $faq)
                        <details class="bg-white rounded-lg p-5 shadow-sm border border-stone/10 group">
                            <summary class="font-semibold text-slate-dark cursor-pointer list-none flex justify-between items-center">
                                {{ $faq->question }}
                                <svg class="w-5 h-5 text-stone group-open:rotate-180 transition shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </summary>
                            <div class="mt-3 text-stone prose prose-sm max-w-none">{!! nl2br(e($faq->answer)) !!}</div>
                        </details>
                    @endforeach
                </div>
            </div>
        @endforeach

        <div class="mt-12 bg-forest rounded-xl p-8 text-center">
            <h2 class="text-2xl font-serif font-bold text-white">Still Have Questions?</h2>
            <p class="mt-2 text-white/80">Give us a call or request a free quote — we're happy to help.</p>
            <div class="mt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="tel:+14038002747" class="inline-flex items-center bg-white text-forest px-6 py-3 rounded-lg font-bold transition hover:bg-cream">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    (403) 800-2747
                </a>
                <a href="{{ route('quote.create') }}" class="inline-block bg-meadow hover:bg-unitas-green text-white px-8 py-3 rounded-lg font-bold transition">Get Your Free Quote</a>
            </div>
        </div>
    </div>
</section>
@endsection
