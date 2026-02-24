@extends('layouts.app')
@section('title', 'Contact Unitas Movers Calgary | Free Quotes | (403) 991-3206')
@section('meta_description', 'Contact Unitas Movers for a free moving quote. Call (403) 991-3206 or email info@unitasmovers.ca. Serving Calgary and surrounding areas.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-primary py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/60 text-sm mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a> &rsaquo;
            <span class="text-white">Contact</span>
        </nav>
        <h1 class="text-3xl lg:text-4xl font-extrabold text-white">Contact Unitas Movers Calgary</h1>
        <p class="mt-3 text-white/80 max-w-2xl">Get in touch with our team — we're here to help with your move.</p>
    </div>
</section>

{{-- SEO Intro --}}
<section class="py-8 border-b border-gray-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-gray-500 leading-relaxed">Whether you need a quick estimate for a <a href="{{ route('services.show', 'local-moving') }}" class="text-primary font-semibold hover:underline">local move</a>, have questions about our <a href="{{ route('services.show', 'long-distance-moving') }}" class="text-primary font-semibold hover:underline">long-distance service</a>, or want to book a move for next week, we're easy to reach. Call us directly, send an email, or <a href="{{ route('quote.create') }}" class="text-primary font-semibold hover:underline">request a free quote online</a> — most quotes are returned within 2 hours during business hours.</p>
    </div>
</section>

<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Contact Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Phone --}}
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <h2 class="text-lg font-bold text-dark mb-1">Phone</h2>
                <a href="tel:+14039913206" class="text-primary font-semibold text-lg hover:underline">(403) 991-3206</a>
                <p class="text-gray-500 text-sm mt-2">Call us for a free estimate or to book your move.</p>
            </div>

            {{-- Email --}}
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h2 class="text-lg font-bold text-dark mb-1">Email</h2>
                <a href="mailto:info@unitasmovers.ca" class="text-primary font-semibold hover:underline">info@unitasmovers.ca</a>
                <p class="text-gray-500 text-sm mt-2">Send us your questions — we reply within 24 hours.</p>
            </div>

            {{-- Service Area --}}
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 text-center">
                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h2 class="text-lg font-bold text-dark mb-1">Service Area</h2>
                <p class="text-primary font-semibold">Calgary & Surrounding Areas</p>
                <p class="text-gray-500 text-sm mt-2">Local moves, long-distance across Alberta, BC & Saskatchewan.</p>
            </div>
        </div>

        {{-- Business Hours --}}
        <div class="mt-12 bg-white rounded-xl p-8 shadow-sm border border-gray-100">
            <h2 class="text-2xl font-extrabold text-dark mb-6 text-center">Business Hours</h2>
            <div class="max-w-md mx-auto space-y-3">
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="font-medium text-dark">Monday – Friday</span>
                    <span class="text-primary font-semibold">7:00 AM – 8:00 PM</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="font-medium text-dark">Saturday – Sunday</span>
                    <span class="text-primary font-semibold">8:00 AM – 6:00 PM</span>
                </div>
                <div class="flex justify-between items-center py-2">
                    <span class="font-medium text-dark">Holidays</span>
                    <span class="text-gray-500">By appointment</span>
                </div>
            </div>
            <p class="text-gray-500 text-sm text-center mt-6">Emergency and after-hours moves available — call us to discuss.</p>
        </div>

        {{-- Service Area Description --}}
        <div class="mt-12">
            <h2 class="text-2xl font-extrabold text-dark mb-4">Where We Serve</h2>
            <div class="prose prose-lg max-w-none text-gray-500">
                <p>Unitas Movers is based in Calgary, Alberta and serves the entire Calgary metropolitan area including all four quadrants (<a href="{{ route('areas.show', 'nw-calgary') }}" class="text-primary hover:underline">NW</a>, <a href="{{ route('areas.show', 'ne-calgary') }}" class="text-primary hover:underline">NE</a>, <a href="{{ route('areas.show', 'sw-calgary') }}" class="text-primary hover:underline">SW</a>, <a href="{{ route('areas.show', 'se-calgary') }}" class="text-primary hover:underline">SE</a>), plus satellite communities like <a href="{{ route('areas.show', 'airdrie') }}" class="text-primary hover:underline">Airdrie</a>, <a href="{{ route('areas.show', 'cochrane') }}" class="text-primary hover:underline">Cochrane</a>, <a href="{{ route('areas.show', 'okotoks') }}" class="text-primary hover:underline">Okotoks</a>, <a href="{{ route('areas.show', 'chestermere') }}" class="text-primary hover:underline">Chestermere</a>, and <a href="{{ route('areas.show', 'strathmore') }}" class="text-primary hover:underline">Strathmore</a>.</p>
                <p>We also handle <a href="{{ route('routes.index') }}" class="text-primary hover:underline">long-distance moves</a> across Alberta (<a href="{{ route('routes.show', 'calgary-to-edmonton') }}" class="text-primary hover:underline">Edmonton</a>, Red Deer, Lethbridge), into British Columbia (<a href="{{ route('routes.show', 'calgary-to-vancouver') }}" class="text-primary hover:underline">Vancouver</a>, <a href="{{ route('routes.show', 'calgary-to-kelowna') }}" class="text-primary hover:underline">Kelowna</a>), and Saskatchewan.</p>
            </div>
        </div>

        <div class="mt-12 bg-primary rounded-xl p-8 text-center">
            <h2 class="text-2xl font-extrabold text-white">Ready to Get Started?</h2>
            <p class="mt-2 text-white/80">Request a free, no-obligation moving quote online.</p>
            <a href="{{ route('quote.create') }}" class="mt-4 inline-block bg-white/20 hover:bg-white/30 text-white px-8 py-3 rounded-lg font-bold transition">Get Your Free Quote</a>
        </div>
    </div>
</section>
@endsection
