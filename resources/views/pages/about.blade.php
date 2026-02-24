@extends('layouts.app')
@section('title', 'About Unitas Movers Calgary | Licensed & Insured Moving Company')
@section('meta_description', 'Unitas Movers is Calgary\'s trusted moving company. Licensed, insured, bilingual English-French crew. 2,500+ moves completed. Eco-friendly practices. Call (403) 800-2747.')
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
                <li class="text-white font-medium">About</li>
            </ol>
        </nav>
        <div class="max-w-3xl">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">About Unitas Movers Calgary</h1>
            <p class="mt-4 text-lg text-white/80 leading-relaxed">Calgary's trusted, licensed, and insured moving company — built on honesty, hard work, and respect for your belongings.</p>
        </div>
    </div>
</section>

{{-- Trust Bar --}}
<section class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <div class="flex flex-wrap justify-center gap-x-8 gap-y-3 text-sm text-gray-500">
            <span class="flex items-center"><svg class="w-4 h-4 text-accent mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>Fully Insured</span>
            <span class="flex items-center"><svg class="w-4 h-4 text-star mr-1.5" fill="currentColor" viewBox="0 0 24 24"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>4.9★ Google Rating</span>
            <span class="flex items-center"><svg class="w-4 h-4 text-primary mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>2,500+ Moves</span>
            <span class="flex items-center"><svg class="w-4 h-4 text-accent mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>Bilingual Team</span>
        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="max-w-4xl mx-auto">

        {{-- Our Story --}}
        <div class="prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-dark">
            <h2>Our Story</h2>
            <p>Unitas Movers was founded with a straightforward mission: give Calgary families and businesses a moving company they can actually trust. Too many people have been burned by hidden fees, careless handling, and movers who don't show up on time. We started Unitas to be the alternative — a company where transparent pricing, professional service, and genuine care for your belongings aren't the exception, they're the standard.</p>
            <p>The name "Unitas" comes from the Latin word for unity. It reflects our belief that a great move is a team effort — between our crew and your family, between careful planning and skilled execution, between honest communication and reliable follow-through. Every move we complete strengthens the trust our community places in us, and we take that responsibility seriously.</p>
            <p>Based in Calgary, we serve the entire metro area and surrounding communities from Airdrie and Cochrane to Okotoks and Chestermere, plus long-distance corridors to Edmonton, Vancouver, Kelowna, and beyond. Whether you're moving a studio apartment in Beltline or a five-bedroom home in Tuscany, our crew brings the same level of care and professionalism to every job.</p>
        </div>

        {{-- What Sets Us Apart --}}
        <div class="mt-14">
            <h2 class="text-2xl font-extrabold text-dark mb-8">What Sets Unitas Movers Apart</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach([
                    ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Transparent, Affordable Pricing', 'desc' => 'Every quote includes crew, truck, equipment, padding, and insurance. No fuel surcharges, no stair fees, no surprise charges on moving day. Rates start at $99/hr for a 2-person crew.'],
                    ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Fully Licensed & Insured', 'desc' => 'We carry comprehensive liability insurance and WCB coverage for every member of our crew. Your belongings are protected from pickup to final placement in your new home.'],
                    ['icon' => 'M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129', 'title' => 'Bilingual English & French Crew', 'desc' => 'We\'re one of the only Calgary moving companies with a bilingual team. Our francophone crew members serve Calgary\'s growing French-speaking community with service in their preferred language.'],
                    ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'title' => 'Eco-Friendly Moving Practices', 'desc' => 'We use reusable moving bins, recyclable packing materials, and fuel-efficient routing. We believe a great move shouldn\'t come at the environment\'s expense.'],
                    ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Flexible Scheduling', 'desc' => 'Same-day moves, evening moves, weekend moves — we work around your schedule, not the other way around. Need movers on short notice? We\'ve got you covered.'],
                    ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Experienced, Professional Crew', 'desc' => 'Every team member is trained in proper lifting techniques, furniture disassembly, and careful handling. We treat your belongings like they\'re our own — because that\'s what you deserve.'],
                ] as $item)
                    <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                        <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"></path></svg>
                        </div>
                        <h3 class="font-bold text-dark">{{ $item['title'] }}</h3>
                        <p class="mt-1 text-gray-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- By The Numbers --}}
        <div class="mt-14 bg-gradient-to-r from-primary/5 to-accent/5 rounded-2xl p-8 border border-primary/10">
            <h2 class="text-2xl font-extrabold text-dark mb-6 text-center">Unitas Movers by the Numbers</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div><p class="text-3xl font-extrabold text-primary">2,500+</p><p class="text-gray-500 text-sm mt-1">Moves Completed</p></div>
                <div><p class="text-3xl font-extrabold text-primary">4.9★</p><p class="text-gray-500 text-sm mt-1">Google Rating</p></div>
                <div><p class="text-3xl font-extrabold text-primary">50+</p><p class="text-gray-500 text-sm mt-1">Communities Served</p></div>
                <div><p class="text-3xl font-extrabold text-primary">$99</p><p class="text-gray-500 text-sm mt-1">Starting Hourly Rate</p></div>
            </div>
        </div>

        {{-- Our Services --}}
        <div class="mt-14 prose prose-lg max-w-none prose-headings:font-extrabold prose-headings:text-dark">
            <h2>Full-Service Moving Company in Calgary</h2>
            <p>We offer a complete range of <a href="{{ route('services.index') }}">moving services</a> designed to handle every type of move. From <a href="{{ route('services.show', 'residential-moving') }}">residential moves</a> and <a href="{{ route('services.show', 'commercial-moving') }}">commercial relocations</a> to <a href="{{ route('services.show', 'piano-moving') }}">piano moving</a>, <a href="{{ route('services.show', 'packing-unpacking') }}">professional packing</a>, <a href="{{ route('services.show', 'senior-moving') }}">senior moving assistance</a>, and <a href="{{ route('services.show', 'same-day-moving') }}">same-day moves</a> — we have the crew, equipment, and experience to get you settled quickly and safely.</p>
            <p>We serve all of Calgary's quadrants — <a href="{{ route('areas.show', 'nw-calgary') }}">NW</a>, <a href="{{ route('areas.show', 'ne-calgary') }}">NE</a>, <a href="{{ route('areas.show', 'sw-calgary') }}">SW</a>, and <a href="{{ route('areas.show', 'se-calgary') }}">SE Calgary</a> — plus surrounding towns like <a href="{{ route('areas.show', 'airdrie') }}">Airdrie</a>, <a href="{{ route('areas.show', 'cochrane') }}">Cochrane</a>, <a href="{{ route('areas.show', 'okotoks') }}">Okotoks</a>, and <a href="{{ route('areas.show', 'canmore') }}">Canmore</a>. For long-distance moves, we cover corridors to <a href="{{ route('routes.show', 'calgary-to-edmonton') }}">Edmonton</a>, <a href="{{ route('routes.show', 'calgary-to-vancouver') }}">Vancouver</a>, <a href="{{ route('routes.show', 'calgary-to-kelowna') }}">Kelowna</a>, and more.</p>
        </div>

        {{-- Licensed & Insured link --}}
        <div class="mt-10">
            <a href="{{ route('about.licensed') }}" class="inline-flex items-center text-primary font-bold hover:underline">Read more about our licensing and insurance coverage <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
        </div>
    </div>
</div>

{{-- Full-Width CTA --}}
<section class="bg-gradient-to-r from-primary to-primary-dark py-14">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-white">Ready to Experience the Unitas Difference?</h2>
        <p class="mt-3 text-white/80 text-lg">Get a free, no-obligation quote. We respond within 2 hours during business hours.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" class="inline-flex items-center justify-center bg-accent hover:bg-accent/90 text-white px-8 py-3.5 rounded-xl font-bold transition shadow-lg">Get Your Free Quote</a>
            <a href="tel:+14038002747" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white px-8 py-3.5 rounded-xl font-bold transition"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(403) 800-2747</a>
        </div>
    </div>
</section>
@endsection
