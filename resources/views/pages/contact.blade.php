@extends('layouts.app')
@section('title', 'Contact Us | Unitas Movers Calgary')
@section('meta_description', 'Contact Unitas Movers for a free moving quote. Call (403) 800-2747 or email info@unitasmovers.ca. Serving Calgary and surrounding areas. Mon-Fri 7AM-8PM, Sat-Sun 8AM-6PM.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/60 text-sm mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a> &rsaquo;
            <span class="text-white">Contact</span>
        </nav>
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Contact Us</h1>
        <p class="mt-3 text-white/80 max-w-2xl">Get in touch with our team — we're here to help with your move.</p>
    </div>
</section>

<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Contact Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Phone --}}
            <div class="bg-white rounded-xl p-6 shadow-sm border border-stone/10 text-center">
                <div class="w-14 h-14 bg-meadow/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-unitas-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <h2 class="text-lg font-bold text-slate-dark mb-1">Phone</h2>
                <a href="tel:+14038002747" class="text-unitas-green font-semibold text-lg hover:underline">(403) 800-2747</a>
                <p class="text-stone text-sm mt-2">Call us for a free estimate or to book your move.</p>
            </div>

            {{-- Email --}}
            <div class="bg-white rounded-xl p-6 shadow-sm border border-stone/10 text-center">
                <div class="w-14 h-14 bg-meadow/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-unitas-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h2 class="text-lg font-bold text-slate-dark mb-1">Email</h2>
                <a href="mailto:info@unitasmovers.ca" class="text-unitas-green font-semibold hover:underline">info@unitasmovers.ca</a>
                <p class="text-stone text-sm mt-2">Send us your questions — we reply within 24 hours.</p>
            </div>

            {{-- Service Area --}}
            <div class="bg-white rounded-xl p-6 shadow-sm border border-stone/10 text-center">
                <div class="w-14 h-14 bg-meadow/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-unitas-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h2 class="text-lg font-bold text-slate-dark mb-1">Service Area</h2>
                <p class="text-unitas-green font-semibold">Calgary & Surrounding Areas</p>
                <p class="text-stone text-sm mt-2">Local moves, long-distance across Alberta, BC & Saskatchewan.</p>
            </div>
        </div>

        {{-- Business Hours --}}
        <div class="mt-12 bg-white rounded-xl p-8 shadow-sm border border-stone/10">
            <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6 text-center">Business Hours</h2>
            <div class="max-w-md mx-auto space-y-3">
                <div class="flex justify-between items-center py-2 border-b border-stone/10">
                    <span class="font-medium text-slate-dark">Monday – Friday</span>
                    <span class="text-unitas-green font-semibold">7:00 AM – 8:00 PM</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-stone/10">
                    <span class="font-medium text-slate-dark">Saturday – Sunday</span>
                    <span class="text-unitas-green font-semibold">8:00 AM – 6:00 PM</span>
                </div>
                <div class="flex justify-between items-center py-2">
                    <span class="font-medium text-slate-dark">Holidays</span>
                    <span class="text-stone">By appointment</span>
                </div>
            </div>
            <p class="text-stone text-sm text-center mt-6">Emergency and after-hours moves available — call us to discuss.</p>
        </div>

        {{-- Service Area Description --}}
        <div class="mt-12">
            <h2 class="text-2xl font-serif font-bold text-slate-dark mb-4">Where We Serve</h2>
            <div class="prose prose-lg max-w-none">
                <p>Unitas Movers is based in Calgary, Alberta and serves the entire Calgary metropolitan area including all four quadrants (NW, NE, SW, SE), plus satellite communities like Airdrie, Cochrane, Okotoks, Chestermere, and Strathmore.</p>
                <p>We also handle long-distance moves across Alberta (Edmonton, Red Deer, Lethbridge, Medicine Hat, Grande Prairie, Fort McMurray), into British Columbia (Vancouver, Kelowna, Canmore, Banff), and Saskatchewan (Saskatoon).</p>
                <p>Whether you're moving across the street or across the province, our licensed and insured team is ready to help.</p>
            </div>
        </div>

        <div class="mt-12 bg-forest rounded-xl p-8 text-center">
            <h2 class="text-2xl font-serif font-bold text-white">Ready to Get Started?</h2>
            <p class="mt-2 text-white/80">Request a free, no-obligation moving quote online.</p>
            <a href="{{ route('quote.create') }}" class="mt-4 inline-block bg-meadow hover:bg-unitas-green text-white px-8 py-3 rounded-lg font-bold transition">Get Your Free Quote</a>
        </div>
    </div>
</section>
@endsection
