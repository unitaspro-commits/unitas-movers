@extends('layouts.app')

@section('title', '404 — Page Not Found | Unitas Movers')
@section('robots', 'noindex, nofollow')

@section('content')
<section class="min-h-[calc(100vh-72px)] flex flex-col items-center justify-center px-4 py-16 overflow-hidden">

    {{-- Animation Scene --}}
    <div class="relative w-full max-w-xl h-48 sm:h-56 mb-8">

        {{-- Scattered Boxes --}}
        <div class="error-box error-box-1 absolute w-10 h-10 sm:w-12 sm:h-12 rounded-md bg-amber-200 border-2 border-amber-400 top-4 left-[15%]" style="animation-delay: 0s;">
            <div class="absolute inset-x-0 top-1/2 h-px bg-amber-400"></div>
            <div class="absolute inset-y-0 left-1/2 w-px bg-amber-400"></div>
        </div>
        <div class="error-box error-box-2 absolute w-8 h-8 sm:w-10 sm:h-10 rounded-md bg-amber-100 border-2 border-amber-300 top-12 left-[35%]" style="animation-delay: 0.8s;">
            <div class="absolute inset-x-0 top-1/2 h-px bg-amber-300"></div>
            <div class="absolute inset-y-0 left-1/2 w-px bg-amber-300"></div>
        </div>
        <div class="error-box error-box-3 absolute w-11 h-11 sm:w-14 sm:h-14 rounded-md bg-amber-200 border-2 border-amber-400 top-2 right-[20%]" style="animation-delay: 1.6s;">
            <div class="absolute inset-x-0 top-1/2 h-px bg-amber-400"></div>
            <div class="absolute inset-y-0 left-1/2 w-px bg-amber-400"></div>
        </div>
        <div class="error-box error-box-tumble absolute w-9 h-9 sm:w-11 sm:h-11 rounded-md bg-amber-100 border-2 border-amber-300 top-16 right-[40%]" style="animation-delay: 2.4s;">
            <div class="absolute inset-x-0 top-1/2 h-px bg-amber-300"></div>
            <div class="absolute inset-y-0 left-1/2 w-px bg-amber-300"></div>
        </div>

        {{-- Road --}}
        <div class="absolute bottom-0 inset-x-0 h-12 sm:h-14 bg-gray-700 rounded-lg overflow-hidden">
            <div class="absolute top-1/2 -translate-y-1/2 inset-x-0 flex justify-around">
                <span class="block w-10 h-1 bg-yellow-400 rounded-full"></span>
                <span class="block w-10 h-1 bg-yellow-400 rounded-full"></span>
                <span class="block w-10 h-1 bg-yellow-400 rounded-full"></span>
                <span class="block w-10 h-1 bg-yellow-400 rounded-full"></span>
                <span class="block w-10 h-1 bg-yellow-400 rounded-full"></span>
                <span class="block w-10 h-1 bg-yellow-400 rounded-full"></span>
                <span class="block w-10 h-1 bg-yellow-400 rounded-full"></span>
            </div>
        </div>

        {{-- Truck + Dust (moves together) --}}
        <div class="error-truck absolute bottom-6 sm:bottom-8" style="left: -150px;">
            {{-- Dust puffs behind the truck --}}
            <div class="absolute -left-5 bottom-0 flex items-end space-x-1">
                <span class="error-dust block w-3 h-3 rounded-full bg-gray-400/40" style="animation-delay: 0s;"></span>
                <span class="error-dust block w-4 h-4 rounded-full bg-gray-300/30" style="animation-delay: 0.15s;"></span>
                <span class="error-dust block w-2 h-2 rounded-full bg-gray-300/20" style="animation-delay: 0.3s;"></span>
            </div>

            {{-- Truck SVG --}}
            <svg width="120" height="64" viewBox="0 0 120 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="drop-shadow-md sm:w-[140px] sm:h-[75px]">
                {{-- Cargo body --}}
                <rect x="0" y="4" width="72" height="40" rx="4" fill="#5934ff"/>
                <rect x="4" y="8" width="64" height="32" rx="2" fill="#7B61FF" opacity="0.5"/>
                <text x="36" y="29" text-anchor="middle" font-size="10" font-weight="700" fill="white" font-family="sans-serif">UNITAS</text>
                {{-- Cab --}}
                <path d="M72 16 H100 C106 16 110 20 112 26 L116 38 V44 H72 V16Z" fill="#4526d9"/>
                {{-- Windshield --}}
                <path d="M78 20 H98 C102 20 105 23 106 27 L108 34 H78 V20Z" fill="#bfdbfe" opacity="0.8"/>
                {{-- Bumper --}}
                <rect x="112" y="34" width="8" height="10" rx="2" fill="#374151"/>
                {{-- Undercarriage --}}
                <rect x="0" y="44" width="116" height="4" rx="2" fill="#374151"/>
                {{-- Front wheel --}}
                <circle cx="96" cy="52" r="10" fill="#374151"/>
                <circle cx="96" cy="52" r="5" fill="#6b7280" class="error-wheel"/>
                <rect x="93" y="49" width="6" height="6" rx="1" fill="#9ca3af" class="error-wheel"/>
                {{-- Rear wheel --}}
                <circle cx="24" cy="52" r="10" fill="#374151"/>
                <circle cx="24" cy="52" r="5" fill="#6b7280" class="error-wheel"/>
                <rect x="21" y="49" width="6" height="6" rx="1" fill="#9ca3af" class="error-wheel"/>
                {{-- Headlight --}}
                <rect x="114" y="28" width="4" height="5" rx="1" fill="#fbbf24"/>
            </svg>
        </div>
    </div>

    {{-- Text Content --}}
    <div class="text-center max-w-lg">
        <h1 class="text-7xl sm:text-8xl font-extrabold bg-gradient-to-r from-primary via-primary-light to-primary bg-[length:200%_auto] animate-shimmer bg-clip-text text-transparent mb-4">
            404
        </h1>
        <h2 class="text-xl sm:text-2xl font-bold text-dark mb-3">
            Oops! This page got lost in the move.
        </h2>
        <p class="text-gray-500 mb-8 leading-relaxed">
            Looks like our movers took a wrong turn. Let's get you back on track.
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8">
            <a href="/"
               class="inline-flex items-center px-7 py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-xl transition-all shadow-[0_4px_15px_rgba(89,52,255,0.3)] hover:shadow-[0_6px_20px_rgba(89,52,255,0.4)]">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0a1 1 0 01-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 01-1 1h-2z"></path></svg>
                Back to Home
            </a>
            <a href="/get-a-quote"
               class="inline-flex items-center px-7 py-3 border-2 border-primary text-primary hover:bg-primary-50 font-semibold rounded-xl transition-all">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                Get a Free Quote
            </a>
        </div>

        <p class="text-sm text-gray-400">
            Or try our <a href="/services" class="text-primary hover:underline font-medium">services</a>,
            <a href="/areas" class="text-primary hover:underline font-medium">areas</a>, or
            <a href="/blog" class="text-primary hover:underline font-medium">blog</a> pages.
        </p>
    </div>
</section>
@endsection
