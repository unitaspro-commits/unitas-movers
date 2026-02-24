@extends('layouts.app')
@section('title', 'Licensed & Insured Movers Calgary | Full Coverage | Unitas Movers')
@section('meta_description', 'Unitas Movers is fully licensed and insured. Comprehensive liability coverage, WCB protection for every crew member. Call (403) 800-2747.')
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
                <li><a href="{{ route('about') }}" class="hover:text-white transition">About</a></li>
                <li><span>&rsaquo;</span></li>
                <li class="text-white font-medium">Licensed & Insured</li>
            </ol>
        </nav>
        <div class="max-w-3xl">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">Licensed & Insured Movers in Calgary</h1>
            <p class="mt-4 text-lg text-white/80 leading-relaxed">Your belongings deserve professional protection. Every Unitas move is backed by comprehensive insurance and proper licensing.</p>
        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="max-w-4xl mx-auto">

        {{-- Why it matters --}}
        <div class="prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-dark">
            <h2>Why Hiring Licensed, Insured Movers Matters</h2>
            <p>Not every company advertising moving services in Calgary carries proper insurance or business licenses. Hiring unlicensed movers puts you at serious financial risk — if your furniture is damaged, your walls are scratched, or a mover is injured on your property, you could be personally liable for the costs.</p>
            <p>Unitas Movers operates with full licensing and comprehensive insurance coverage so that every move we complete is professionally protected from start to finish. When you hire us, you're hiring a legitimate, accountable business — not a crew operating out of a personal truck with no coverage.</p>
        </div>

        {{-- Coverage cards --}}
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-6">
            @foreach([
                ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Comprehensive Liability Insurance', 'desc' => 'We carry full liability insurance that covers your belongings from the moment our crew picks them up until they\'re placed in your new home. If something is damaged during the move, we take full responsibility.'],
                ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'WCB Coverage for Every Crew Member', 'desc' => 'All Unitas Movers crew members are covered by Workers\' Compensation Board (WCB) insurance. This protects both our team and you — if a mover is injured during your move, you won\'t be held liable.'],
                ['icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'title' => 'Proper Business Licensing', 'desc' => 'Unitas Movers holds all required municipal business licenses and provincial permits for operating a moving company in Calgary and throughout Alberta. We operate above-board, always.'],
                ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'title' => 'Cargo & Property Protection', 'desc' => 'Beyond coverage for your belongings in transit, we carry property damage insurance that covers any accidental damage to your home — walls, floors, doorframes, and fixtures — during the moving process.'],
            ] as $card)
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $card['icon'] }}"></path></svg>
                    </div>
                    <h3 class="font-bold text-dark text-lg">{{ $card['title'] }}</h3>
                    <p class="mt-2 text-gray-500 text-sm leading-relaxed">{{ $card['desc'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- How to verify --}}
        <div class="mt-14 prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-dark">
            <h2>How to Verify a Moving Company Is Legitimate</h2>
            <p>Before hiring any mover in Calgary, protect yourself by checking these essentials:</p>
            <p><strong>Ask for proof of insurance.</strong> A legitimate moving company will provide a certificate of insurance on request. If they hesitate or can't produce one, walk away.</p>
            <p><strong>Check their business license.</strong> Calgary requires moving companies to hold a valid municipal business license. You can verify this through the City of Calgary's business registry.</p>
            <p><strong>Look for WCB coverage.</strong> Workers' Compensation Board coverage protects you if a mover is injured on your property. Without it, you could be personally liable for medical costs and lost wages.</p>
            <p><strong>Read reviews carefully.</strong> Check <a href="{{ route('reviews') }}">Google reviews</a>, HomeStars, and BBB for patterns of complaints about damaged items, hidden fees, or unprofessional conduct. A company with consistent 4.5+ star ratings across multiple platforms is a strong indicator of reliability.</p>
            <p>Unitas Movers meets every one of these standards. We're happy to provide proof of insurance, our business license number, and WCB documentation to any customer who asks — because we have nothing to hide.</p>
        </div>

        {{-- FAQ --}}
        <div class="mt-14">
            <h2 class="text-2xl font-extrabold text-dark mb-8">Insurance & Licensing Questions</h2>
            <div class="space-y-3" x-data="{ open: null }">
                @foreach([
                    ['q' => 'What happens if my belongings are damaged during the move?', 'a' => 'Contact us immediately. Our liability insurance covers damage that occurs during the moving process. We\'ll document the damage, file a claim, and work to resolve it as quickly as possible — whether that means repair, replacement, or compensation.'],
                    ['q' => 'Does your insurance cover high-value items like pianos or artwork?', 'a' => 'Our standard liability coverage applies to all items we move. For exceptionally high-value items (antiques, fine art, musical instruments worth $5,000+), we recommend discussing additional coverage options when you request your quote.'],
                    ['q' => 'Are your movers employees or contractors?', 'a' => 'Our movers are direct team members, not independent contractors. This means they\'re fully covered by our WCB policy, professionally trained to our standards, and accountable to our quality commitments.'],
                    ['q' => 'Can I see your insurance certificate before booking?', 'a' => 'Absolutely. We provide proof of insurance to any customer who requests it. Just ask when you receive your quote, and we\'ll send it over promptly.'],
                ] as $index => $faq)
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <button @click="open = open === {{ $index }} ? null : {{ $index }}" class="w-full flex justify-between items-center px-6 py-4 text-left hover:bg-gray-50 transition">
                            <span class="font-semibold text-dark pr-4">{{ $faq['q'] }}</span>
                            <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform duration-200" :class="{ 'rotate-180': open === {{ $index }} }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="open === {{ $index }}" x-collapse x-cloak class="px-6 pb-4">
                            <p class="text-gray-500 leading-relaxed">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

{{-- CTA --}}
<section class="bg-gradient-to-r from-primary to-primary-dark py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white">Move With Confidence</h2>
        <p class="mt-3 text-white/80 text-lg">Fully licensed. Fully insured. No hidden fees. Get your free quote today.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Get Your Free Quote</a>
            <a href="tel:+14038002747" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 800-2747</a>
        </div>
    </div>
</section>
@endsection
