@extends('layouts.app')
@section('title', 'Moving Prices Calgary | Transparent Pricing | Alpine Movers')
@section('meta_description', 'Transparent moving prices in Calgary. No hidden fees. Studio from $350, 1BR from $500, 2BR from $750. Free quotes — call (403) 800-2747.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-alpine-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Transparent Moving Prices</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto">Honest pricing with no hidden fees. What we quote is what you pay.</p>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-xl shadow-sm border border-stone/10">
                <thead>
                    <tr class="border-b border-stone/10 bg-snow">
                        <th class="text-left py-4 px-6 text-sm font-semibold text-slate-dark">Move Size</th>
                        <th class="text-left py-4 px-6 text-sm font-semibold text-slate-dark">Duration</th>
                        <th class="text-left py-4 px-6 text-sm font-semibold text-slate-dark">Estimated Cost</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone/10">
                    <tr><td class="py-4 px-6">Studio / Bachelor</td><td class="py-4 px-6 text-stone">2–3 hours</td><td class="py-4 px-6 font-semibold text-alpine-green">$350 – $550</td></tr>
                    <tr><td class="py-4 px-6">1 Bedroom</td><td class="py-4 px-6 text-stone">3–4 hours</td><td class="py-4 px-6 font-semibold text-alpine-green">$500 – $750</td></tr>
                    <tr><td class="py-4 px-6">2 Bedrooms</td><td class="py-4 px-6 text-stone">4–6 hours</td><td class="py-4 px-6 font-semibold text-alpine-green">$750 – $1,200</td></tr>
                    <tr><td class="py-4 px-6">3 Bedrooms</td><td class="py-4 px-6 text-stone">6–8 hours</td><td class="py-4 px-6 font-semibold text-alpine-green">$1,200 – $1,800</td></tr>
                    <tr><td class="py-4 px-6">4+ Bedrooms</td><td class="py-4 px-6 text-stone">8–10 hours</td><td class="py-4 px-6 font-semibold text-alpine-green">$1,800 – $2,500+</td></tr>
                    <tr><td class="py-4 px-6">Office / Commercial</td><td class="py-4 px-6 text-stone">Custom</td><td class="py-4 px-6 font-semibold text-alpine-green">Contact Us</td></tr>
                </tbody>
            </table>
        </div>
        <div class="mt-8 bg-cream rounded-xl p-6">
            <h2 class="text-xl font-semibold text-slate-dark mb-4">What's Included</h2>
            <ul class="space-y-2 text-stone">
                <li class="flex items-start"><svg class="w-5 h-5 text-meadow mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Professional moving crew (2–4 movers)</li>
                <li class="flex items-start"><svg class="w-5 h-5 text-meadow mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Moving truck with all equipment</li>
                <li class="flex items-start"><svg class="w-5 h-5 text-meadow mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Furniture padding and protection</li>
                <li class="flex items-start"><svg class="w-5 h-5 text-meadow mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Full liability insurance coverage</li>
                <li class="flex items-start"><svg class="w-5 h-5 text-meadow mr-2 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>No hidden fees or surprise charges</li>
            </ul>
        </div>
        <div class="mt-8 text-center">
            <a href="{{ route('quote.create') }}" class="inline-block bg-alpine-green hover:bg-forest text-white px-8 py-4 rounded-lg font-bold text-lg transition shadow-lg">Get Your Exact Quote</a>
        </div>
    </div>
</section>
@endsection
