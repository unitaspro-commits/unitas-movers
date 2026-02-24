@extends('layouts.app')

@section('title', 'Movers Calgary | Affordable Local & Long-Distance Moving Company — Unitas Movers')
@section('meta_description', 'Movers in Calgary from $99/hr. Licensed, insured, affordable local & long-distance moving, packing, piano moving, and storage. 4.9★ rated, 2,500+ moves. Free quotes — call (403) 800-2747.')

@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How much do movers cost in Calgary?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The average cost of movers in Calgary ranges from $99 to $149 per hour for a 2-person crew with a truck. A typical local move for a one-bedroom apartment costs $300–$600, while a 3-bedroom house move averages $800–$1,500. Long-distance moves from Calgary to Edmonton start around $1,200–$2,500 depending on volume."
                }
            },
            {
                "@type": "Question",
                "name": "How far in advance should I book movers in Calgary?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend booking your Calgary movers at least 2–4 weeks in advance, especially during peak moving season (May through September) and at month-end when demand is highest. Same-day and last-minute moving services are also available based on availability."
                }
            },
            {
                "@type": "Question",
                "name": "Are your movers licensed and insured?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Unitas Movers is a fully licensed and insured moving company in Calgary with comprehensive general liability insurance and cargo coverage. All crew members are covered by Workers' Compensation Board (WCB) insurance."
                }
            },
            {
                "@type": "Question",
                "name": "What areas do you serve around Calgary?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We serve all four quadrants of Calgary (NW, NE, SW, SE) and Downtown, plus surrounding communities including Airdrie, Cochrane, Okotoks, Chestermere, Canmore, Banff, Strathmore, and High River. For long-distance moves, we cover routes to Edmonton, Vancouver, Kelowna, Red Deer, Lethbridge, Saskatoon, and Winnipeg."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer packing services?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer full and partial packing services using professional-grade materials. Eco-friendly packing options with reusable bins and recyclable materials are also available. Unpacking services are available at your destination."
                }
            },
            {
                "@type": "Question",
                "name": "What is the best time to move in Calgary?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The cheapest time to move in Calgary is during the off-peak season from October through March, when rates can be 20–30% lower. Mid-week moves (Tuesday to Thursday) and mid-month dates are also typically more affordable. Peak moving season runs from May through September."
                }
            }
        ]
    }
    </script>
    @endverbatim
@endsection

@section('content')

{{-- Section 1: Hero — Split layout: blob video + 4-step quote form --}}
<section class="bg-gradient-hero relative overflow-hidden">
    {{-- Decorative elements --}}
    <div class="absolute top-20 right-[10%] w-72 h-72 bg-primary/10 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-10 left-[5%] w-56 h-56 bg-primary-light/10 rounded-full blur-[100px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-19">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            {{-- LEFT: Tagline + Blob Video --}}
            <div class="order-2 lg:order-1">
                {{-- Badge --}}
                <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-primary/5 border border-primary/15 mb-4">
                    <span class="w-2 h-2 bg-accent rounded-full mr-2 animate-pulse"></span>
                    <span class="text-gray-500 text-sm font-medium">Trusted by 2,500+ Calgary families</span>
                </div>

                <p class="text-4xl sm:text-5xl lg:text-5xl xl:text-6xl font-extrabold text-dark leading-[1.1] tracking-tight">
                    Your Smoothest<br>
                    <span class="bg-gradient-to-r from-primary-light via-primary to-accent bg-clip-text text-transparent">Move Yet.</span>
                </p>

                <p class="mt-3 text-lg text-gray-500 leading-relaxed max-w-lg">
                    Affordable, licensed and insured movers Calgary families trust. Local moves, long-distance relocations, packing, and storage — we handle it all so you can focus on what matters.
                </p>

                {{-- Phone CTA --}}
                <div class="mt-5 flex items-center space-x-4">
                    <a href="tel:+14038002747" class="inline-flex items-center bg-primary/10 hover:bg-primary/15 text-primary px-5 py-2.5 rounded-xl font-semibold text-sm transition">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        (403) 800-2747
                    </a>
                    <span class="text-gray-400 text-sm">Free estimate</span>
                </div>

                {{-- Blob-shaped video --}}
                <div class="mt-8 relative animate-float-blob">
                    <div class="video-blob-fallback w-full max-w-xl aspect-[16/10] shadow-2xl shadow-primary/15">
                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                            <source src="{{ asset('videos/unitas-movers-hero.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    {{-- Decorative ring around blob --}}
                    <div class="absolute -inset-4 video-blob-fallback border-2 border-primary/10 pointer-events-none"></div>
                    {{-- Glow effect behind video --}}
                    <div class="absolute -inset-8 video-blob-fallback bg-primary/5 blur-2xl -z-10"></div>
                </div>

                {{-- Stats row --}}
                <div class="mt-10 grid grid-cols-4 gap-4">
                    <div>
                        <div class="text-2xl font-extrabold text-dark">2,500+</div>
                        <div class="text-gray-400 text-xs mt-0.5 font-medium">Moves Done</div>
                    </div>
                    <div>
                        <div class="text-2xl font-extrabold text-dark">4.9<span class="text-star">★</span></div>
                        <div class="text-gray-400 text-xs mt-0.5 font-medium">Google</div>
                    </div>
                    <div>
                        <div class="text-2xl font-extrabold text-dark">10+</div>
                        <div class="text-gray-400 text-xs mt-0.5 font-medium">Years Exp.</div>
                    </div>
                    <div>
                        <div class="text-2xl font-extrabold text-dark">$0</div>
                        <div class="text-gray-400 text-xs mt-0.5 font-medium">Hidden Fees</div>
                    </div>
                </div>
            </div>

            {{-- RIGHT: 4-Step Quote Form --}}
            <div class="order-1 lg:order-2" x-data="quoteForm()">
                <div class="bg-white rounded-3xl p-6 lg:p-8 shadow-xl shadow-gray-300/50 border border-gray-200 relative overflow-hidden">
                    {{-- Decorative corner gradient --}}
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-primary-50 to-transparent rounded-bl-full"></div>

                    <div class="relative">
                        @if(session('success'))
                            <div class="mb-4 bg-accent/10 border border-accent/20 rounded-xl p-4 text-center">
                                <svg class="w-8 h-8 text-accent mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <p class="text-sm font-semibold text-dark">Quote Request Submitted!</p>
                                <p class="text-xs text-gray-500 mt-1">{{ session('success') }}</p>
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="mb-4 bg-error/10 border border-error/20 rounded-xl p-4">
                                <p class="font-semibold text-error text-sm mb-1">Please fix the following:</p>
                                <ul class="list-disc list-inside text-xs text-error/80 space-y-0.5">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h2 class="text-xl font-extrabold text-dark mb-1">Get Your Free Quote</h2>
                        <p class="text-gray-600 text-sm mb-6">Fill in the details and we'll respond within 2 hours.</p>

                        {{-- Step Indicators --}}
                        <div class="flex items-center justify-between mb-8">
                            <template x-for="(label, index) in stepLabels" :key="index">
                                <div class="flex items-center" :class="index < stepLabels.length - 1 ? 'flex-1' : ''">
                                    <button type="button" @click="goToStep(index + 1)"
                                        class="step-dot w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold border-2 transition-all shrink-0"
                                        :class="{
                                            'active border-primary': step === index + 1,
                                            'completed border-accent cursor-pointer': step > index + 1,
                                            'border-gray-200 text-gray-400 bg-white cursor-not-allowed opacity-50': step < index + 1
                                        }">
                                        <template x-if="step > index + 1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </template>
                                        <template x-if="step <= index + 1">
                                            <span x-text="index + 1"></span>
                                        </template>
                                    </button>
                                    <div x-show="index < stepLabels.length - 1"
                                        class="step-connector flex-1 h-0.5 mx-2 rounded transition-colors"
                                        :class="{
                                            'completed bg-accent': step > index + 1,
                                            'active bg-primary': step === index + 1,
                                            'bg-gray-200': step < index + 1
                                        }"></div>
                                </div>
                            </template>
                        </div>
                        <div class="text-xs text-gray-400 text-center -mt-5 mb-6">
                            <span x-text="stepLabels[step - 1]" class="font-semibold text-primary"></span>
                        </div>

                        <form method="POST" action="{{ route('quote.store') }}" @submit.prevent="submitForm($event)">
                            @csrf
                            <div style="position:absolute;left:-9999px;" aria-hidden="true">
                                <input type="text" name="website" tabindex="-1" autocomplete="off">
                            </div>
                            <input type="hidden" name="source_page" value="{{ url()->current() }}">
                            <input type="hidden" name="utm_source" id="hero_utm_source">
                            <input type="hidden" name="utm_medium" id="hero_utm_medium">
                            <input type="hidden" name="utm_campaign" id="hero_utm_campaign">

                            <div class="form-steps-container">
                            {{-- Step 1: Move Type + Location + Date --}}
                            <div class="form-step" :class="{ 'active': step === 1 }">
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-base font-semibold text-dark mb-2">Move Type</label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <label class="relative cursor-pointer">
                                                <input type="radio" name="move_size" value="home" x-model="formData.move_size" @change="clearError('move_size')" class="peer sr-only">
                                                <div :class="errors.move_size ? 'border-error' : 'border-gray-300'" class="peer-checked:border-primary peer-checked:bg-primary-50 peer-checked:text-primary border-2 rounded-xl px-3 py-3 text-center transition hover:border-gray-400">
                                                    <svg class="w-6 h-6 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0a1 1 0 01-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 01-1 1h-2z"></path></svg>
                                                    <span class="text-sm font-bold text-dark">Home</span>
                                                </div>
                                            </label>
                                            <label class="relative cursor-pointer">
                                                <input type="radio" name="move_size" value="office" x-model="formData.move_size" @change="clearError('move_size')" class="peer sr-only">
                                                <div :class="errors.move_size ? 'border-error' : 'border-gray-300'" class="peer-checked:border-primary peer-checked:bg-primary-50 peer-checked:text-primary border-2 rounded-xl px-3 py-3 text-center transition hover:border-gray-400">
                                                    <svg class="w-6 h-6 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                                    <span class="text-sm font-bold text-dark">Office</span>
                                                </div>
                                            </label>
                                        </div>
                                        <p x-show="errors.move_size" x-cloak class="text-error text-xs font-medium mt-1" x-text="errors.move_size"></p>
                                    </div>
                                    <div>
                                        <span class="block text-base font-semibold text-dark mb-2">Moving From</span>
                                        <div class="relative">
                                            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                            <input type="text" name="moving_from" id="hero_moving_from" x-model="formData.moving_from" required
                                                placeholder="Your current address" autocomplete="off"
                                                @input="onAddressInput('moving_from')"
                                                @blur="setTimeout(() => { if (window._googlePlacesUnavailable) return; if (window._suppressAddressInput && window._suppressAddressInput.moving_from) return; if (document.activeElement === $el) return; if (formData.moving_from && !addressSelected.moving_from) errors.moving_from = 'Please select an address from the dropdown' }, 300)"
                                                :class="errors.moving_from ? 'border-error focus:border-error focus:ring-error/20' : 'border-gray-300 focus:border-primary focus:ring-primary/20'"
                                                class="w-full rounded-xl border pl-10 pr-4 py-3 text-base text-dark placeholder:text-gray-500 focus:ring-2 transition">
                                        </div>
                                        <p x-show="errors.moving_from" x-cloak class="text-error text-xs font-medium mt-1" x-text="errors.moving_from"></p>
                                        <input type="hidden" name="origin_city" id="hero_origin_city">
                                    </div>
                                    <div>
                                        <span class="block text-base font-semibold text-dark mb-2">Moving To</span>
                                        <div class="relative">
                                            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                            <input type="text" name="moving_to" id="hero_moving_to" x-model="formData.moving_to" required
                                                placeholder="Your destination address" autocomplete="off"
                                                @input="onAddressInput('moving_to')"
                                                @blur="setTimeout(() => { if (window._googlePlacesUnavailable) return; if (window._suppressAddressInput && window._suppressAddressInput.moving_to) return; if (document.activeElement === $el) return; if (formData.moving_to && !addressSelected.moving_to) errors.moving_to = 'Please select an address from the dropdown' }, 300)"
                                                :class="errors.moving_to ? 'border-error focus:border-error focus:ring-error/20' : 'border-gray-300 focus:border-primary focus:ring-primary/20'"
                                                class="w-full rounded-xl border pl-10 pr-4 py-3 text-base text-dark placeholder:text-gray-500 focus:ring-2 transition">
                                        </div>
                                        <p x-show="errors.moving_to" x-cloak class="text-error text-xs font-medium mt-1" x-text="errors.moving_to"></p>
                                        <input type="hidden" name="destination_city" id="hero_destination_city">
                                    </div>
                                    <div>
                                        <span class="block text-base font-semibold text-dark mb-2">Move Date</span>
                                        <div class="relative">
                                            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                            <input type="date" name="move_date" id="hero_move_date" x-ref="moveDateInput" x-model="formData.move_date" required
                                                min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                                                max="{{ date('Y-m-d', strtotime('+2 years')) }}"
                                                @click="$el.showPicker && $el.showPicker()"
                                                @change="clearError('move_date')"
                                                :class="errors.move_date ? 'border-error focus:border-error focus:ring-error/20' : 'border-gray-300 focus:border-primary focus:ring-primary/20'"
                                                class="w-full rounded-xl border pl-10 pr-4 py-3 text-base text-dark focus:ring-2 transition cursor-pointer">
                                        </div>
                                        <p x-show="errors.move_date" x-cloak class="text-error text-xs font-medium mt-1" x-text="errors.move_date"></p>
                                    </div>
                                </div>
                            </div>

                            {{-- Step 2: Contact Info --}}
                            <div class="form-step" :class="{ 'active': step === 2 }">
                                <div class="space-y-4">
                                    <div>
                                        <label for="hero_full_name" class="block text-base font-semibold text-dark mb-2">Full Name</label>
                                        <input type="text" name="full_name" id="hero_full_name" x-model="formData.full_name" required
                                            placeholder="John Doe"
                                            @input="clearError('full_name')"
                                            :class="errors.full_name ? 'border-error focus:border-error focus:ring-error/20' : 'border-gray-300 focus:border-primary focus:ring-primary/20'"
                                            class="w-full rounded-xl border px-4 py-3 text-base text-dark placeholder:text-gray-500 focus:ring-2 transition">
                                        <p x-show="errors.full_name" x-cloak class="text-error text-xs font-medium mt-1" x-text="errors.full_name"></p>
                                    </div>
                                    <div>
                                        <label for="hero_phone" class="block text-base font-semibold text-dark mb-2">Phone Number</label>
                                        <input type="tel" name="phone" id="hero_phone" x-model="formData.phone" required
                                            placeholder="(403) 000-0000" maxlength="20"
                                            @input="clearError('phone')"
                                            @blur="if (formData.phone && formData.phone.replace(/\D/g,'').length < 10) errors.phone = 'Please enter a valid phone number (at least 10 digits)'"
                                            :class="errors.phone ? 'border-error focus:border-error focus:ring-error/20' : 'border-gray-300 focus:border-primary focus:ring-primary/20'"
                                            class="w-full rounded-xl border px-4 py-3 text-base text-dark placeholder:text-gray-500 focus:ring-2 transition">
                                        <p x-show="errors.phone" x-cloak class="text-error text-xs font-medium mt-1" x-text="errors.phone"></p>
                                    </div>
                                    <div>
                                        <label for="hero_email" class="block text-base font-semibold text-dark mb-2">Email Address</label>
                                        <input type="email" name="email" id="hero_email" x-model="formData.email" required
                                            placeholder="john@example.com"
                                            @input="clearError('email')"
                                            @blur="if (formData.email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email)) errors.email = 'Please enter a valid email address'"
                                            :class="errors.email ? 'border-error focus:border-error focus:ring-error/20' : 'border-gray-300 focus:border-primary focus:ring-primary/20'"
                                            class="w-full rounded-xl border px-4 py-3 text-base text-dark placeholder:text-gray-500 focus:ring-2 transition">
                                        <p x-show="errors.email" x-cloak class="text-error text-xs font-medium mt-1" x-text="errors.email"></p>
                                    </div>
                                </div>
                            </div>

                            {{-- Step 3: Services Needed --}}
                            <div class="form-step" :class="{ 'active': step === 3 }">
                                <div class="space-y-3">
                                    <label class="block text-base font-semibold text-dark mb-2">Services Needed <span class="font-normal text-gray-500">(select all that apply)</span></label>
                                    @php
                                        $serviceOptions = [
                                            'moving' => ['label' => 'Moving', 'icon' => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4'],
                                            'packing' => ['label' => 'Packing', 'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
                                            'unpacking' => ['label' => 'Unpacking', 'icon' => 'M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8'],
                                            'junk_removal' => ['label' => 'Junk Removal', 'icon' => 'M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16'],
                                        ];
                                    @endphp
                                    <div class="grid grid-cols-2 gap-3">
                                        @foreach($serviceOptions as $value => $svc)
                                            <label class="relative cursor-pointer">
                                                <input type="checkbox" name="services_needed[]" value="{{ $value }}" class="peer sr-only"
                                                    @change="toggleService('{{ $value }}')">
                                                <div :class="errors.services_needed ? 'border-error' : 'border-gray-300'" class="peer-checked:border-primary peer-checked:bg-primary-50 border-2 rounded-xl p-3.5 transition hover:border-gray-400 flex items-center space-x-2.5">
                                                    <svg class="w-5 h-5 text-gray-600 peer-checked:text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $svc['icon'] }}"></path></svg>
                                                    <span class="text-sm font-bold text-dark">{{ $svc['label'] }}</span>
                                                </div>
                                            </label>
                                        @endforeach
                                    </div>
                                    <p x-show="errors.services_needed" x-cloak class="text-error text-xs font-medium mt-1" x-text="errors.services_needed"></p>
                                    <div class="mt-4">
                                        <label for="hero_notes" class="block text-base font-semibold text-dark mb-2">Special Instructions or Notes</label>
                                        <textarea name="additional_notes" id="hero_notes" x-model="formData.additional_notes" rows="2"
                                            placeholder="Stairs, elevator, fragile items, etc."
                                            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-base text-dark placeholder:text-gray-500 focus:border-primary focus:ring-2 focus:ring-primary/20 transition resize-none"></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>{{-- /.form-steps-container --}}

                            {{-- Navigation Buttons --}}
                            <div class="mt-6 flex items-center" :class="step > 1 ? 'justify-between' : 'justify-end'">
                                <button type="button" x-show="step > 1" @click="prevStep()"
                                    class="flex items-center text-gray-500 hover:text-dark font-semibold text-sm transition">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                    Back
                                </button>
                                <button type="button" x-show="step < 3" @click="nextStep()"
                                    class="bg-primary hover:bg-primary-dark text-white px-8 py-3 rounded-xl font-bold text-sm transition-all shadow-[0_4px_20px_rgba(89,52,255,0.3)] hover:shadow-[0_6px_30px_rgba(89,52,255,0.4)] hover:-translate-y-0.5 flex items-center">
                                    Continue
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </button>
                                <button type="submit" x-show="step === 3" :disabled="submitting"
                                    class="bg-primary hover:bg-primary-dark text-white px-8 py-3 rounded-xl font-bold text-sm transition-all shadow-[0_4px_20px_rgba(89,52,255,0.3)] hover:shadow-[0_6px_30px_rgba(89,52,255,0.4)] hover:-translate-y-0.5 flex items-center disabled:opacity-60 disabled:cursor-not-allowed">
                                    <template x-if="!submitting">
                                        <span class="flex items-center">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Get Free Quote
                                        </span>
                                    </template>
                                    <template x-if="submitting">
                                        <span class="flex items-center">
                                            <svg class="animate-spin w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                                            Submitting...
                                        </span>
                                    </template>
                                </button>
                            </div>
                        </form>

                        {{-- Trust note --}}
                        <div class="mt-5 flex items-center justify-center text-xs text-gray-400 space-x-4">
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                Secure & private
                            </span>
                            <span class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Response in 2 hours
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Alpine.js Quote Form Logic --}}
<script>
function quoteForm() {
    return {
        step: 1,
        submitting: false,
        stepLabels: ['Move Details', 'Contact', 'Services'],
        formData: {
            moving_from: '',
            moving_to: '',
            move_date: '',
            move_size: '',
            full_name: '',
            phone: '',
            email: '',
            services_needed: [],
            additional_notes: ''
        },
        addressSelected: { moving_from: false, moving_to: false },
        errors: {},
        markAddressSelected(field) {
            this.addressSelected[field] = true;
            delete this.errors[field];
        },
        onAddressInput(field) {
            if (window._suppressAddressInput && window._suppressAddressInput[field]) return;
            this.addressSelected[field] = false;
            if (window._userTypedAddress) window._userTypedAddress[field] = true;
            delete this.errors[field];
        },
        clearError(field) {
            delete this.errors[field];
        },
        toggleService(value) {
            const idx = this.formData.services_needed.indexOf(value);
            if (idx > -1) {
                this.formData.services_needed.splice(idx, 1);
            } else {
                this.formData.services_needed.push(value);
            }
            if (this.formData.services_needed.length > 0) delete this.errors.services_needed;
        },
        nextStep() {
            if (this.validateStep()) {
                this.step = Math.min(this.step + 1, 3);
            }
        },
        prevStep() {
            this.step = Math.max(this.step - 1, 1);
        },
        goToStep(target) {
            if (target < this.step) {
                this.step = target;
            } else if (target === this.step + 1 && this.validateStep()) {
                this.step = target;
            }
        },
        validateStep() {
            this.errors = {};
            var valid = true;
            switch (this.step) {
                case 1:
                    if (!this.formData.move_size) { this.errors.move_size = 'Please select a move type'; valid = false; }
                    if (!this.formData.moving_from) { this.errors.moving_from = 'This field is required'; valid = false; }
                    else if (!window._googlePlacesUnavailable && !this.addressSelected.moving_from) { this.errors.moving_from = 'Please select an address from the dropdown'; valid = false; }
                    if (!this.formData.moving_to) { this.errors.moving_to = 'This field is required'; valid = false; }
                    else if (!window._googlePlacesUnavailable && !this.addressSelected.moving_to) { this.errors.moving_to = 'Please select an address from the dropdown'; valid = false; }
                    if (!this.formData.move_date) { this.errors.move_date = 'Please select a move date'; valid = false; }
                    break;
                case 2:
                    if (!this.formData.full_name || this.formData.full_name.trim().length < 2) { this.errors.full_name = 'Please enter your full name'; valid = false; }
                    if (!this.formData.phone) { this.errors.phone = 'This field is required'; valid = false; }
                    else if (this.formData.phone.replace(/\D/g,'').length < 10) { this.errors.phone = 'Please enter a valid phone number (at least 10 digits)'; valid = false; }
                    if (!this.formData.email) { this.errors.email = 'This field is required'; valid = false; }
                    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.formData.email)) { this.errors.email = 'Please enter a valid email address'; valid = false; }
                    break;
                case 3:
                    if (this.formData.services_needed.length === 0) { this.errors.services_needed = 'Please select at least one service'; valid = false; }
                    break;
            }
            if (!valid) {
                this.shake();
                this.$nextTick(() => {
                    var firstError = this.$el.querySelector('.text-error');
                    if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                });
            }
            return valid;
        },
        shake() {
            const form = this.$el.querySelector('.bg-white');
            form.classList.add('animate-shake');
            setTimeout(() => form.classList.remove('animate-shake'), 500);
        },
        submitForm(event) {
            if (this.submitting) return;
            if (this.validateStep()) {
                this.submitting = true;
                event.target.submit();
            }
        }
    };
}
</script>

{{-- Section 2: Trust Bar + Logo Marquee (#6) --}}
<section class="border-b border-gray-100 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-wrap justify-center gap-6 items-center text-center">
            @php
                $trustItems = [
                    ['icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Fully Insured'],
                    ['icon' => 'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z', 'label' => '4.9★ Google'],
                    ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Affordable Rates'],
                    ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Same-Day Available'],
                ];
            @endphp
            @foreach($trustItems as $item)
                <div data-reveal="up" data-reveal-delay="{{ $loop->iteration }}" class="flex flex-col items-center min-w-[100px]">
                    <div class="w-10 h-10 bg-primary-50 rounded-xl flex items-center justify-center mb-2 animate-float-gentle" style="animation-delay: {{ $loop->index * 0.3 }}s">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"></path></svg>
                    </div>
                    <span class="text-sm font-semibold text-dark">{{ $item['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 2.5: SEO Content with H1 --}}
<section class="py-16 lg:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 data-reveal="up" class="text-3xl lg:text-4xl font-extrabold text-dark tracking-tight mb-8">Trusted Movers in Calgary — Affordable Local & Long-Distance Moving Company</h1>
        <div data-reveal="up" data-reveal-delay="1" class="prose prose-lg max-w-none text-gray-600 space-y-5">
            <p>Looking for reliable <strong>movers in Calgary</strong>? Unitas Movers is a fully licensed and insured <strong>moving company in Calgary</strong> with over 10 years of experience helping families, renters, and businesses relocate safely and affordably. Whether you need <a href="{{ route('services.show', 'local-moving') }}">local movers</a> for a cross-town move or a <a href="{{ route('services.show', 'long-distance-moving') }}">long-distance moving company</a> for a Calgary to Edmonton, Calgary to Vancouver, or Calgary to Kelowna relocation, our professional crews handle every job with care.</p>

            <p>We offer a full range of <strong>Calgary moving services</strong> including <a href="{{ route('services.show', 'residential-moving') }}">residential moving</a>, <a href="{{ route('services.show', 'apartment-moving') }}">apartment moving</a>, <a href="{{ route('services.show', 'condo-moving') }}">condo moving</a>, <a href="{{ route('services.show', 'commercial-moving') }}">commercial and office relocation</a>, <a href="{{ route('services.show', 'packing-unpacking') }}">professional packing and unpacking</a>, <a href="{{ route('services.show', 'piano-moving') }}">piano moving</a>, <a href="{{ route('services.show', 'senior-moving') }}">senior moving assistance</a>, <a href="{{ route('services.show', 'furniture-moving') }}">furniture delivery</a>, <a href="{{ route('services.show', 'junk-removal') }}">junk removal</a>, and <a href="{{ route('services.show', 'storage-solutions') }}">storage solutions</a>. Need movers fast? We offer <a href="{{ route('services.show', 'same-day-moving') }}">same-day and last-minute moving</a> as well as <a href="{{ route('services.show', 'evening-weekend-moving') }}">evening and weekend availability</a> to work around your schedule.</p>

            <p>What makes Unitas one of the <strong>best movers in Calgary</strong>? Our commitment to <a href="{{ route('pricing') }}">transparent, affordable pricing</a> with no hidden fees — the quote we give is the price you pay. We carry comprehensive liability and cargo insurance so your belongings are fully protected. Our experienced crew handles everything from <a href="{{ route('services.show', 'piano-moving') }}">piano moves</a> to full <a href="{{ route('services.show', 'commercial-moving') }}">office relocations</a>, with the same level of care and professionalism on every job.</p>

            <p>We proudly serve all Calgary quadrants — <a href="{{ route('areas.show', 'nw-calgary') }}">NW Calgary</a>, <a href="{{ route('areas.show', 'ne-calgary') }}">NE Calgary</a>, <a href="{{ route('areas.show', 'sw-calgary') }}">SW Calgary</a>, <a href="{{ route('areas.show', 'se-calgary') }}">SE Calgary</a>, and <a href="{{ route('areas.show', 'downtown-calgary') }}">Downtown</a> including the <a href="{{ route('areas.show', 'beltline') }}">Beltline</a> — plus surrounding communities like <a href="{{ route('areas.show', 'airdrie') }}">Airdrie</a>, <a href="{{ route('areas.show', 'cochrane') }}">Cochrane</a>, <a href="{{ route('areas.show', 'okotoks') }}">Okotoks</a>, <a href="{{ route('areas.show', 'chestermere') }}">Chestermere</a>, <a href="{{ route('areas.show', 'canmore') }}">Canmore</a>, and <a href="{{ route('areas.show', 'banff') }}">Banff</a>. With over 2,500 moves completed and a 4.9-star Google rating, we're one of Calgary's most trusted and <a href="{{ route('services.show', 'affordable-moving') }}">affordable moving companies</a>. <a href="{{ route('quote.create') }}">Get your free quote</a> online or call <a href="tel:+14038002747">(403) 800-2747</a> today.</p>
        </div>
    </div>
</section>

{{-- Homepage FAQ — targets People Also Ask boxes --}}
<section class="pb-16 lg:pb-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 data-reveal="up" class="text-2xl lg:text-3xl font-extrabold text-dark tracking-tight mb-8">Frequently asked questions about moving in Calgary</h2>
        <div data-reveal="up" data-reveal-delay="1" class="space-y-4" x-data="{ open: null }">
            @php
                $homeFaqs = [
                    [
                        'q' => 'How much do movers cost in Calgary?',
                        'a' => 'The average cost of movers in Calgary ranges from $99 to $149 per hour for a 2-person crew with a truck. A typical local move for a one-bedroom apartment costs $300–$600, while a 3-bedroom house move averages $800–$1,500. Long-distance moves from Calgary to Edmonton start around $1,200–$2,500 depending on volume. Moving cost depends on distance, volume, and seasonal demand. At Unitas Movers, we provide transparent, all-inclusive quotes with no hidden fees — <a href="' . route('quote.create') . '" class="text-primary hover:underline">request your free estimate</a> to get an exact price.',
                    ],
                    [
                        'q' => 'How far in advance should I book movers in Calgary?',
                        'a' => 'We recommend booking your Calgary movers at least 2–4 weeks in advance, especially during peak moving season (May through September) and at month-end when demand is highest. However, Unitas Movers also offers <a href="' . route('services.show', 'same-day-moving') . '" class="text-primary hover:underline">same-day and last-minute moving services</a> based on availability. Call us at <a href="tel:+14038002747" class="text-primary hover:underline">(403) 800-2747</a> to check current scheduling.',
                    ],
                    [
                        'q' => 'Are your movers licensed and insured?',
                        'a' => 'Yes. Unitas Movers is a fully licensed and insured moving company in Calgary. We carry comprehensive general liability insurance and cargo coverage to protect your belongings during every move. All our crew members are trained professionals covered by Workers\' Compensation Board (WCB) insurance. You can learn more on our <a href="' . route('about.licensed-insured') . '" class="text-primary hover:underline">licensed and insured</a> page.',
                    ],
                    [
                        'q' => 'What areas do you serve around Calgary?',
                        'a' => 'We serve all four quadrants of Calgary (NW, NE, SW, SE) and Downtown, plus surrounding communities including Airdrie, Cochrane, Okotoks, Chestermere, Canmore, Banff, Strathmore, and High River. For long-distance moves, we cover routes to Edmonton, Vancouver, Kelowna, Red Deer, Lethbridge, Saskatoon, and Winnipeg. See our <a href="' . route('areas.index') . '" class="text-primary hover:underline">full service area</a>.',
                    ],
                    [
                        'q' => 'Do you offer packing services?',
                        'a' => 'Yes, we offer <a href="' . route('services.show', 'packing-unpacking') . '" class="text-primary hover:underline">full and partial packing services</a> using professional-grade materials. Our team can pack your entire home or just the fragile and specialty items. Unpacking services are available at your destination as well.',
                    ],
                    [
                        'q' => 'What is the best time to move in Calgary?',
                        'a' => 'The cheapest time to move in Calgary is during the off-peak season from October through March, when rates can be 20–30% lower than summer prices. Mid-week moves (Tuesday to Thursday) and mid-month dates are also typically cheaper. Peak moving season runs from May through September, with July being the busiest month. Regardless of when you move, Unitas Movers offers competitive rates year-round.',
                    ],
                ];
            @endphp
            @foreach($homeFaqs as $i => $faq)
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <button @click="open = open === {{ $i }} ? null : {{ $i }}" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition">
                        <span class="font-semibold text-dark pr-4">{{ $faq['q'] }}</span>
                        <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" :class="open === {{ $i }} && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="open === {{ $i }}" x-collapse x-cloak class="px-6 pb-5 text-gray-600 leading-relaxed">
                        {!! $faq['a'] !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 3: How It Works --}}
<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div data-reveal="up" class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary text-sm font-semibold mb-4">How It Works</div>
            <h2 data-reveal="up" data-reveal-delay="1" class="text-3xl lg:text-5xl font-extrabold text-dark tracking-tight">How our Calgary moving service works</h2>
            <p data-reveal="up" data-reveal-delay="2" class="mt-4 text-gray-500 max-w-2xl mx-auto text-lg">Simple, transparent, stress-free. Here's how we get you moved.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
                $steps = [
                    ['num' => '01', 'title' => 'Request a Quote', 'desc' => 'Fill out our quick form or call us. We\'ll provide a transparent, no-obligation quote within 2 hours.', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                    ['num' => '02', 'title' => 'We Plan Everything', 'desc' => 'Our team handles logistics, scheduling, and preparation. We bring all equipment and professional supplies.', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'],
                    ['num' => '03', 'title' => 'Move Day Magic', 'desc' => 'Our professional crew handles everything with care. Sit back while we safely transport your world to its new home.', 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3'],
                ];
            @endphp
            @foreach($steps as $step)
                <div data-reveal="up" data-reveal-delay="{{ $loop->iteration }}" class="group relative bg-white rounded-3xl p-8 border border-gray-100 hover:border-primary/20 card-hover-tilt">
                    <div class="text-primary/10 text-6xl font-extrabold absolute top-6 right-8">{{ $step['num'] }}</div>
                    <div class="w-14 h-14 bg-primary-50 group-hover:bg-primary rounded-2xl flex items-center justify-center mb-6 transition-colors">
                        <svg class="w-7 h-7 text-primary group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $step['icon'] }}"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">{{ $step['title'] }}</h3>
                    <p class="text-gray-500 leading-relaxed">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 4: Services Grid with Unique Icons (#8) --}}
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div data-reveal="up" class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary text-sm font-semibold mb-4">Our Services</div>
            <h2 data-reveal="up" data-reveal-delay="1" class="text-3xl lg:text-5xl font-extrabold text-dark tracking-tight">Calgary moving services for every need</h2>
            <p data-reveal="up" data-reveal-delay="2" class="mt-4 text-gray-500 max-w-2xl mx-auto text-lg">From local apartment moves to long-distance relocations across Alberta and BC, we handle it all.</p>
        </div>
        @php
            $serviceIcons = [
                'local-moving' => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
                'residential-moving' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
                'apartment-moving' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'condo-moving' => 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z',
                'commercial-moving' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                'long-distance-moving' => 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7',
                'packing-unpacking' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                'piano-moving' => 'M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2z',
                'specialty-moving' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4',
                'furniture-moving' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
                'small-moves' => 'M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4',
                'senior-moving' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'same-day-moving' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                'evening-weekend-moving' => 'M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z',
                'storage-solutions' => 'M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4',
                'junk-removal' => 'M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16',
                'affordable-moving' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
            ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($services as $service)
                <a href="{{ route('services.show', $service) }}" data-reveal="scale" data-reveal-delay="{{ $loop->iteration }}" class="group bg-white rounded-2xl p-6 border border-gray-100 hover:border-primary/20 card-hover-tilt">
                    <div class="w-12 h-12 bg-primary-50 group-hover:bg-primary rounded-xl flex items-center justify-center mb-4 transition-colors">
                        <svg class="w-6 h-6 text-primary group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $serviceIcons[$service->slug] ?? 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4' }}"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-dark group-hover:text-primary transition-colors">{{ $service->name }}</h3>
                    <p class="mt-2 text-gray-500 text-sm leading-relaxed">{{ Str::limit($service->meta_description, 100) }}</p>
                    <div class="mt-4 flex items-center text-primary text-sm font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                        Learn more
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>
            @empty
                <div class="col-span-3 text-center py-8 text-gray-400">
                    <p>Services coming soon.</p>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('services.index') }}" class="inline-flex items-center text-primary hover:text-primary-dark font-semibold transition">
                View all services
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </div>
</section>

{{-- Section 5: Why Unitas --}}
<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div data-reveal="right" class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary text-sm font-semibold mb-4">Why Unitas Movers</div>
                <h2 data-reveal="right" data-reveal-delay="1" class="text-3xl lg:text-5xl font-extrabold text-dark tracking-tight leading-tight">Why Calgary trusts<br><span class="text-primary">Unitas Movers</span></h2>
                <p data-reveal="right" data-reveal-delay="2" class="mt-6 text-gray-500 text-lg leading-relaxed">We're not just another moving company in Calgary — we combine professional expertise with affordable pricing and genuine care for your belongings. That's the Unitas difference.</p>

                <div class="mt-10 space-y-6">
                    @php
                        $features = [
                            ['title' => 'Affordable & Transparent Pricing', 'desc' => 'Competitive rates starting from $99/hr with no hidden fees. The quote we give is the price you pay — guaranteed.', 'color' => 'bg-accent/10 text-accent'],
                            ['title' => 'Same-Day Availability', 'desc' => 'Need to move fast? We offer same-day and last-minute bookings when availability allows. Call us and we\'ll make it work.', 'color' => 'bg-green-50 text-green-600'],
                            ['title' => 'Experienced, Professional Crew', 'desc' => 'Our trained movers handle everything from delicate pianos to full office relocations with care, speed, and respect for your property.', 'color' => 'bg-blue-50 text-blue-600'],
                            ['title' => 'Same-Day, Evening & Weekend Moves', 'desc' => 'Flexible scheduling including last-minute, evening, and weekend availability to fit around your life.', 'color' => 'bg-primary-50 text-primary'],
                        ];
                    @endphp
                    @foreach($features as $feat)
                        <div data-reveal="right" data-reveal-delay="{{ $loop->iteration + 2 }}" class="flex items-start space-x-4">
                            <div class="w-10 h-10 {{ $feat['color'] }} rounded-xl flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-dark text-lg">{{ $feat['title'] }}</h3>
                                <p class="text-gray-500 mt-1">{{ $feat['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="relative" data-reveal="left">
                <div class="bg-gradient-to-br from-primary/5 via-primary-50 to-accent/5 rounded-3xl p-8 lg:p-12 animate-gradient-bg">
                    <div class="grid grid-cols-2 gap-6">
                        <div data-reveal="scale" data-reveal-delay="1" class="bg-white rounded-2xl p-6 shadow-sm text-center card-hover-tilt">
                            <div class="text-3xl font-extrabold text-primary counter-glow">2,500+</div>
                            <div class="text-gray-500 text-sm mt-1">Moves Done</div>
                        </div>
                        <div data-reveal="scale" data-reveal-delay="2" class="bg-white rounded-2xl p-6 shadow-sm text-center card-hover-tilt">
                            <div class="text-3xl font-extrabold text-primary counter-glow">4.9<span class="text-star">★</span></div>
                            <div class="text-gray-500 text-sm mt-1">Google Rating</div>
                        </div>
                        <div data-reveal="scale" data-reveal-delay="3" class="bg-white rounded-2xl p-6 shadow-sm text-center card-hover-tilt">
                            <div class="text-3xl font-extrabold text-primary counter-glow">10+</div>
                            <div class="text-gray-500 text-sm mt-1">Years Experience</div>
                        </div>
                        <div data-reveal="scale" data-reveal-delay="4" class="bg-white rounded-2xl p-6 shadow-sm text-center card-hover-tilt">
                            <div class="text-3xl font-extrabold text-accent counter-glow">100%</div>
                            <div class="text-gray-500 text-sm mt-1">Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 5.5: Before/After Parallax (#4) --}}
<section class="relative overflow-hidden" x-data="{ side: 50 }">
    <div class="bg-dark py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div data-reveal="up" class="inline-flex items-center px-3 py-1 rounded-full bg-white/10 text-primary-light text-sm font-semibold mb-4">The Unitas Difference</div>
                <h2 data-reveal="up" data-reveal-delay="1" class="text-3xl lg:text-5xl font-extrabold text-white tracking-tight">Professional movers vs. the rest</h2>
            </div>
            <div data-reveal="scale" class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0 rounded-3xl overflow-hidden border border-white/10">
                    {{-- Before --}}
                    <div class="bg-gradient-to-br from-red-500/10 to-red-600/5 p-8 lg:p-12 border-b md:border-b-0 md:border-r border-white/10">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-red-500/15 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4">Without Unitas</h3>
                            <ul class="space-y-3 text-left">
                                @foreach(['Hidden fees & surprise charges', 'Damaged furniture, no insurance', 'Late arrivals, no communication', 'Stressful, chaotic experience', 'No care for your belongings'] as $item)
                                    <li class="flex items-center text-white/60 text-sm">
                                        <svg class="w-5 h-5 text-red-400 mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- After --}}
                    <div class="bg-gradient-to-br from-primary/10 to-accent/5 p-8 lg:p-12">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-accent/15 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4">With Unitas Movers</h3>
                            <ul class="space-y-3 text-left">
                                @foreach(['Transparent pricing, no surprises', 'Fully insured, careful handling', 'On time, every time, with updates', 'Smooth, organized experience', 'Your belongings treated like our own'] as $item)
                                    <li class="flex items-center text-white/80 text-sm">
                                        <svg class="w-5 h-5 text-accent mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 6: Areas Served with Animated Map (#5) --}}
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div data-reveal="up" class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary text-sm font-semibold mb-4">Coverage</div>
            <h2 data-reveal="up" data-reveal-delay="1" class="text-3xl lg:text-5xl font-extrabold text-dark tracking-tight">Movers serving Calgary, Airdrie, Cochrane & area</h2>
            <p data-reveal="up" data-reveal-delay="2" class="mt-4 text-gray-500 max-w-2xl mx-auto text-lg">Proudly serving all four Calgary quadrants, surrounding towns, and long-distance routes to Edmonton, Vancouver, and beyond.</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            {{-- SVG Map --}}
            <div data-reveal="right" class="relative">
                <svg viewBox="0 0 400 400" class="w-full max-w-md mx-auto" xmlns="http://www.w3.org/2000/svg">
                    {{-- Background circles --}}
                    <circle cx="200" cy="200" r="180" fill="#EEE9FF" opacity="0.3"/>
                    <circle cx="200" cy="200" r="120" fill="#EEE9FF" opacity="0.2"/>
                    {{-- Quadrant lines --}}
                    <line x1="200" y1="80" x2="200" y2="320" stroke="#5934ff" stroke-width="0.5" opacity="0.2"/>
                    <line x1="80" y1="200" x2="320" y2="200" stroke="#5934ff" stroke-width="0.5" opacity="0.2"/>
                    {{-- Connection lines from center --}}
                    @php
                        $mapAreas = [
                            ['name' => 'NW', 'x' => 140, 'y' => 140],
                            ['name' => 'NE', 'x' => 260, 'y' => 140],
                            ['name' => 'SW', 'x' => 140, 'y' => 260],
                            ['name' => 'SE', 'x' => 260, 'y' => 260],
                            ['name' => 'Airdrie', 'x' => 200, 'y' => 55],
                            ['name' => 'Cochrane', 'x' => 55, 'y' => 170],
                            ['name' => 'Okotoks', 'x' => 180, 'y' => 345],
                            ['name' => 'Chestermere', 'x' => 335, 'y' => 190],
                        ];
                    @endphp
                    @foreach($mapAreas as $area)
                        <line x1="200" y1="200" x2="{{ $area['x'] }}" y2="{{ $area['y'] }}" stroke="#5934ff" stroke-width="1" opacity="0.15"/>
                        <circle cx="{{ $area['x'] }}" cy="{{ $area['y'] }}" r="5" fill="#5934ff" class="map-dot"/>
                        <text x="{{ $area['x'] }}" y="{{ $area['y'] - 12 }}" text-anchor="middle" font-size="10" font-weight="600" fill="#22201f">{{ $area['name'] }}</text>
                    @endforeach
                    {{-- Center dot + label --}}
                    <circle cx="200" cy="200" r="10" fill="#5934ff" opacity="0.2"/>
                    <circle cx="200" cy="200" r="5" fill="#5934ff"/>
                    <text x="200" y="220" text-anchor="middle" font-size="14" font-weight="800" fill="#5934ff">CALGARY</text>
                </svg>
            </div>
            {{-- Area Cards --}}
            <div>
                <div class="grid grid-cols-2 gap-4">
                    @forelse($areas as $area)
                        <a href="{{ route('areas.show', $area) }}" data-reveal="scale" data-reveal-delay="{{ min($loop->iteration, 8) }}" class="group bg-white rounded-2xl p-5 border border-gray-100 hover:border-primary/20 card-hover-tilt text-center">
                            <h3 class="font-bold text-dark group-hover:text-primary transition-colors">{{ $area->name }}</h3>
                            <p class="text-gray-400 text-xs mt-1">{{ ucfirst($area->area_type) }}</p>
                        </a>
                    @empty
                        @foreach(['NW Calgary', 'NE Calgary', 'SW Calgary', 'SE Calgary', 'Airdrie', 'Cochrane', 'Okotoks', 'Chestermere'] as $areaName)
                            <div data-reveal="scale" data-reveal-delay="{{ $loop->iteration }}" class="bg-white rounded-2xl p-5 border border-gray-100 card-hover-tilt text-center">
                                <h3 class="font-bold text-dark">{{ $areaName }}</h3>
                            </div>
                        @endforeach
                    @endforelse
                </div>
                <div class="text-center mt-8">
                    <a href="{{ route('areas.index') }}" class="inline-flex items-center text-primary hover:text-primary-dark font-semibold transition">
                        View all areas
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Neighborhood Grid — organized by quadrant for SEO --}}
        <div data-reveal="up" class="mt-16">
            <h3 class="text-xl font-bold text-dark text-center mb-8">Calgary neighborhoods we serve</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- NW Calgary --}}
                <div>
                    <h4 class="font-bold text-primary text-sm uppercase tracking-wider mb-3">NW Calgary</h4>
                    <ul class="space-y-1.5 text-sm text-gray-600">
                        <li><a href="{{ route('areas.show', 'kensington') }}" class="hover:text-primary transition">Kensington</a></li>
                        <li><a href="{{ route('areas.show', 'hillhurst') }}" class="hover:text-primary transition">Hillhurst</a></li>
                        <li><a href="{{ route('areas.show', 'university-heights') }}" class="hover:text-primary transition">University Heights</a></li>
                        <li><a href="{{ route('areas.show', 'varsity') }}" class="hover:text-primary transition">Varsity</a></li>
                        <li><a href="{{ route('areas.show', 'brentwood') }}" class="hover:text-primary transition">Brentwood</a></li>
                        <li><a href="{{ route('areas.show', 'dalhousie') }}" class="hover:text-primary transition">Dalhousie</a></li>
                        <li><a href="{{ route('areas.show', 'edgemont') }}" class="hover:text-primary transition">Edgemont</a></li>
                        <li><a href="{{ route('areas.show', 'tuscany') }}" class="hover:text-primary transition">Tuscany</a></li>
                        <li><a href="{{ route('areas.show', 'royal-oak') }}" class="hover:text-primary transition">Royal Oak</a></li>
                        <li><a href="{{ route('areas.show', 'scenic-acres') }}" class="hover:text-primary transition">Scenic Acres</a></li>
                        <li><a href="{{ route('areas.show', 'bowness') }}" class="hover:text-primary transition">Bowness</a></li>
                    </ul>
                </div>

                {{-- NE Calgary --}}
                <div>
                    <h4 class="font-bold text-primary text-sm uppercase tracking-wider mb-3">NE Calgary</h4>
                    <ul class="space-y-1.5 text-sm text-gray-600">
                        <li><a href="{{ route('areas.show', 'bridgeland') }}" class="hover:text-primary transition">Bridgeland</a></li>
                        <li><a href="{{ route('areas.show', 'renfrew') }}" class="hover:text-primary transition">Renfrew</a></li>
                        <li><a href="{{ route('areas.show', 'marlborough') }}" class="hover:text-primary transition">Marlborough</a></li>
                        <li><a href="{{ route('areas.show', 'falconridge') }}" class="hover:text-primary transition">Falconridge</a></li>
                        <li><a href="{{ route('areas.show', 'saddleridge') }}" class="hover:text-primary transition">Saddleridge</a></li>
                        <li><a href="{{ route('areas.show', 'skyview-ranch') }}" class="hover:text-primary transition">Skyview Ranch</a></li>
                        <li><a href="{{ route('areas.show', 'cityscape') }}" class="hover:text-primary transition">Cityscape</a></li>
                        <li><a href="{{ route('areas.show', 'martindale') }}" class="hover:text-primary transition">Martindale</a></li>
                    </ul>
                </div>

                {{-- SW Calgary --}}
                <div>
                    <h4 class="font-bold text-primary text-sm uppercase tracking-wider mb-3">SW Calgary</h4>
                    <ul class="space-y-1.5 text-sm text-gray-600">
                        <li><a href="{{ route('areas.show', 'beltline') }}" class="hover:text-primary transition">Beltline</a></li>
                        <li><a href="{{ route('areas.show', 'mission') }}" class="hover:text-primary transition">Mission</a></li>
                        <li><a href="{{ route('areas.show', 'marda-loop') }}" class="hover:text-primary transition">Marda Loop</a></li>
                        <li><a href="{{ route('areas.show', 'killarney') }}" class="hover:text-primary transition">Killarney</a></li>
                        <li><a href="{{ route('areas.show', 'altadore') }}" class="hover:text-primary transition">Altadore</a></li>
                        <li><a href="{{ route('areas.show', 'south-calgary') }}" class="hover:text-primary transition">South Calgary</a></li>
                        <li><a href="{{ route('areas.show', 'bankview') }}" class="hover:text-primary transition">Bankview</a></li>
                        <li><a href="{{ route('areas.show', 'lakeview') }}" class="hover:text-primary transition">Lakeview</a></li>
                        <li><a href="{{ route('areas.show', 'signal-hill') }}" class="hover:text-primary transition">Signal Hill</a></li>
                        <li><a href="{{ route('areas.show', 'aspen-woods') }}" class="hover:text-primary transition">Aspen Woods</a></li>
                        <li><a href="{{ route('areas.show', 'discovery-ridge') }}" class="hover:text-primary transition">Discovery Ridge</a></li>
                    </ul>
                </div>

                {{-- SE Calgary --}}
                <div>
                    <h4 class="font-bold text-primary text-sm uppercase tracking-wider mb-3">SE Calgary</h4>
                    <ul class="space-y-1.5 text-sm text-gray-600">
                        <li><a href="{{ route('areas.show', 'douglasdale') }}" class="hover:text-primary transition">Douglasdale</a></li>
                        <li><a href="{{ route('areas.show', 'mahogany') }}" class="hover:text-primary transition">Mahogany</a></li>
                        <li><a href="{{ route('areas.show', 'auburn-bay') }}" class="hover:text-primary transition">Auburn Bay</a></li>
                        <li><a href="{{ route('areas.show', 'cranston') }}" class="hover:text-primary transition">Cranston</a></li>
                        <li><a href="{{ route('areas.show', 'mckenzie-towne') }}" class="hover:text-primary transition">McKenzie Towne</a></li>
                        <li><a href="{{ route('areas.show', 'copperfield') }}" class="hover:text-primary transition">Copperfield</a></li>
                        <li><a href="{{ route('areas.show', 'new-brighton') }}" class="hover:text-primary transition">New Brighton</a></li>
                        <li><a href="{{ route('areas.show', 'walden') }}" class="hover:text-primary transition">Walden</a></li>
                    </ul>
                </div>
            </div>

            {{-- Surrounding towns --}}
            <div class="mt-10">
                <h4 class="font-bold text-primary text-sm uppercase tracking-wider mb-3 text-center">Surrounding Communities</h4>
                <div class="flex flex-wrap justify-center gap-3">
                    @php
                        $towns = [
                            'airdrie' => 'Airdrie', 'cochrane' => 'Cochrane', 'okotoks' => 'Okotoks',
                            'chestermere' => 'Chestermere', 'canmore' => 'Canmore', 'banff' => 'Banff',
                            'strathmore' => 'Strathmore', 'high-river' => 'High River',
                            'langdon' => 'Langdon', 'crossfield' => 'Crossfield',
                        ];
                    @endphp
                    @foreach($towns as $slug => $name)
                        <a href="{{ route('areas.show', $slug) }}" class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm text-gray-600 hover:border-primary/30 hover:text-primary transition">{{ $name }}</a>
                    @endforeach
                </div>
            </div>

            <p class="mt-8 text-center text-gray-500 text-sm max-w-3xl mx-auto">Our professional movers provide residential, commercial, and specialty moving services across all Calgary communities. Whether you're relocating from a Beltline condo, a family home in Tuscany, or an office in the Downtown core, Unitas Movers delivers the same careful, insured service at affordable rates. <a href="{{ route('areas.index') }}" class="text-primary hover:underline">View our complete service area</a>.</p>
        </div>
    </div>
</section>

{{-- Section 7: Video Testimonials (#2) --}}
<section class="py-20 lg:py-28 bg-dark relative overflow-hidden">
    <div class="absolute top-20 left-[10%] w-56 h-56 bg-primary/15 rounded-full blur-[100px]"></div>
    <div class="absolute bottom-20 right-[10%] w-72 h-72 bg-primary-light/10 rounded-full blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div data-reveal="up" class="inline-flex items-center px-3 py-1 rounded-full bg-white/10 text-white/80 text-sm font-semibold mb-4">Testimonials</div>
            <h2 data-reveal="up" data-reveal-delay="1" class="text-3xl lg:text-5xl font-extrabold text-white tracking-tight">Rated one of the best movers in Calgary</h2>
            <p data-reveal="up" data-reveal-delay="2" class="mt-4 text-white/50 max-w-2xl mx-auto text-lg">4.9-star Google rated with 2,500+ successful moves. See what Calgary customers say about our moving company.</p>
        </div>

        {{-- Review Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($reviews as $review)
                <div data-reveal="up" data-reveal-delay="{{ $loop->iteration }}" class="bg-white/5 backdrop-blur-sm rounded-2xl p-7 border border-white/10 hover:border-white/20 transition animate-float-card-{{ $loop->iteration }}">
                    <div class="flex items-center mb-4">
                        @for($i = 1; $i <= 5; $i++)
                            <svg class="w-5 h-5 {{ $i <= $review->rating ? 'text-star' : 'text-white/10' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-white/80 text-sm leading-relaxed mb-5">"{{ Str::limit($review->body, 200) }}"</p>
                    <div class="flex items-center">
                        <div class="w-9 h-9 bg-primary/30 rounded-full flex items-center justify-center text-white font-bold text-sm mr-3">{{ substr($review->customer_name, 0, 1) }}</div>
                        <div>
                            <p class="text-white font-semibold text-sm">{{ $review->customer_name }}</p>
                            @if($review->source !== 'direct')
                                <p class="text-white/40 text-xs">via {{ ucfirst($review->source) }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                @foreach([
                    ['name' => 'Sarah M.', 'text' => 'Unitas Movers made our move from NW Calgary completely stress-free. The crew was professional, careful with our furniture, and finished ahead of schedule. Highly recommend!'],
                    ['name' => 'James P.', 'text' => 'They handled our piano with incredible care and finished ahead of schedule. The affordable pricing was a bonus we didn\'t expect. Highly recommend!'],
                    ['name' => 'David & Karen T.', 'text' => 'Best movers in Calgary, period. Transparent pricing, no hidden fees, and the crew went above and beyond. Already recommending to all our friends.'],
                ] as $placeholder)
                    <div data-reveal="up" data-reveal-delay="{{ $loop->iteration }}" class="bg-white/5 backdrop-blur-sm rounded-2xl p-7 border border-white/10 animate-float-card-{{ $loop->iteration }}">
                        <div class="flex items-center mb-4">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 text-star" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            @endfor
                        </div>
                        <p class="text-white/80 text-sm leading-relaxed mb-5">"{{ $placeholder['text'] }}"</p>
                        <div class="flex items-center">
                            <div class="w-9 h-9 bg-primary/30 rounded-full flex items-center justify-center text-white font-bold text-sm mr-3">{{ substr($placeholder['name'], 0, 1) }}</div>
                            <p class="text-white font-semibold text-sm">{{ $placeholder['name'] }}</p>
                        </div>
                    </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>

{{-- Section 8: Photo Gallery --}}
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div data-reveal="up" class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary text-sm font-semibold mb-4">Gallery</div>
            <h2 data-reveal="up" data-reveal-delay="1" class="text-3xl lg:text-5xl font-extrabold text-dark tracking-tight">Calgary movers in action</h2>
            <p data-reveal="up" data-reveal-delay="2" class="mt-4 text-gray-500 max-w-2xl mx-auto text-lg">See how our professional crews handle every move with care.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 auto-rows-[200px]">
            @php
                $gallery = [
                    ['alt' => 'Unitas Movers crew loading furniture onto moving truck in Calgary', 'span' => 'md:row-span-2', 'img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80'],
                    ['alt' => 'Professional furniture wrapping and packing service Calgary', 'span' => '', 'img' => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=400&q=80'],
                    ['alt' => 'Calgary moving truck ready for local residential move', 'span' => '', 'img' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=400&q=80'],
                    ['alt' => 'Happy Calgary family in new home after move with Unitas Movers', 'span' => 'md:col-span-2', 'img' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&q=80'],
                    ['alt' => 'Professional packing materials and moving supplies Calgary', 'span' => '', 'img' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=400&q=80'],
                    ['alt' => 'Unitas Movers professional moving team in Calgary Alberta', 'span' => 'md:col-span-2 md:row-span-2', 'img' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&q=80'],
                    ['alt' => 'Piano moving specialists carefully handling piano in Calgary home', 'span' => '', 'img' => 'https://images.unsplash.com/photo-1600573472550-8090b5e0745e?w=400&q=80'],
                ];
            @endphp
            @foreach($gallery as $i => $photo)
                <div data-reveal="scale" data-reveal-delay="{{ min($i + 1, 8) }}" class="gallery-item relative rounded-2xl overflow-hidden bg-gray-200 {{ $photo['span'] }}">
                    <x-responsive-image :src="$photo['img']" :alt="$photo['alt']" class="w-full h-full object-cover" />
                    <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-dark/70 to-transparent flex items-end p-4">
                        <p class="text-white text-sm font-medium">{{ $photo['alt'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 10: Blog Preview --}}
<section class="py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div data-reveal="up" class="inline-flex items-center px-3 py-1 rounded-full bg-primary-50 text-primary text-sm font-semibold mb-4">Resources</div>
            <h2 data-reveal="up" data-reveal-delay="1" class="text-3xl lg:text-5xl font-extrabold text-dark tracking-tight">Calgary moving tips & guides</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($blogPosts as $post)
                <a href="{{ route('blog.show', $post) }}" data-reveal="up" data-reveal-delay="{{ $loop->iteration }}" class="group bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-primary/20 card-hover-tilt">
                    <div class="h-48 bg-gradient-to-br from-primary/5 to-primary-50 flex items-center justify-center">
                        @if($post->featured_image)
                            <x-responsive-image :src="$post->featured_image" :alt="$post->title" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" sizes="(max-width: 768px) 100vw, 33vw" />
                        @else
                            <svg class="w-12 h-12 text-primary/15" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2"></path></svg>
                        @endif
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold text-primary uppercase tracking-wider">{{ $post->category }}</span>
                        <h3 class="mt-2 text-lg font-bold text-dark group-hover:text-primary transition-colors">{{ $post->title }}</h3>
                        @if($post->excerpt)
                            <p class="mt-2 text-gray-500 text-sm leading-relaxed">{{ Str::limit($post->excerpt, 100) }}</p>
                        @endif
                    </div>
                </a>
            @empty
                @foreach([
                    ['title' => 'Complete Guide to Moving in Calgary', 'cat' => 'guides', 'excerpt' => 'Everything you need to know about planning your Calgary move.'],
                    ['title' => '10 Packing Tips to Save Time & Money', 'cat' => 'tips', 'excerpt' => 'Professional packing tips from our experienced crew.'],
                    ['title' => 'Winter Moving in Calgary', 'cat' => 'seasonal', 'excerpt' => 'Special considerations for moving during Calgary\'s cold months.'],
                ] as $placeholder)
                    <div data-reveal="up" data-reveal-delay="{{ $loop->iteration }}" class="bg-white rounded-2xl overflow-hidden border border-gray-100 card-hover-tilt">
                        <div class="h-48 bg-gradient-to-br from-primary/5 to-primary-50 flex items-center justify-center">
                            <svg class="w-12 h-12 text-primary/15" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2"></path></svg>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-primary uppercase tracking-wider">{{ $placeholder['cat'] }}</span>
                            <h3 class="mt-2 text-lg font-bold text-dark">{{ $placeholder['title'] }}</h3>
                            <p class="mt-2 text-gray-500 text-sm">{{ $placeholder['excerpt'] }}</p>
                        </div>
                    </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>

{{-- Section 11: Final CTA --}}
<section class="py-20 lg:py-28">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-reveal="scale" class="bg-gradient-cta animate-gradient-bg rounded-3xl p-10 lg:p-16 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-[80px] -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full blur-[60px] translate-y-1/2 -translate-x-1/2"></div>

            <div class="relative">
                <h2 data-reveal="up" data-reveal-delay="1" class="text-3xl lg:text-5xl font-extrabold text-white tracking-tight">Get your free Calgary moving quote</h2>
                <p data-reveal="up" data-reveal-delay="2" class="mt-4 text-white/70 text-lg max-w-xl mx-auto">No-obligation estimates from one of Calgary's top-rated moving companies. We respond within 2 hours during business hours.</p>
                <div data-reveal="up" data-reveal-delay="3" class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('quote.create') }}" class="bg-white hover:bg-gray-50 text-primary px-8 py-4 rounded-2xl font-bold text-lg transition-all shadow-lg hover:-translate-y-0.5 animate-pulse-ring">
                        Get Your Free Quote
                    </a>
                    <a href="tel:+14038002747" class="border-2 border-white/25 hover:border-white/50 text-white px-8 py-4 rounded-2xl font-semibold text-lg transition-all hover:bg-white/5">
                        Call (403) 800-2747
                    </a>
                </div>
                <p class="mt-6 text-white/40 text-sm">No credit card required. No obligation. Just honest pricing.</p>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<?php if(config('services.google.maps_api_key')): ?>
<style>
    .pac-container {
        border-radius: 0.5rem;
        border: 1px solid rgba(120, 113, 108, 0.2);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        font-family: inherit;
        margin-top: 4px;
        z-index: 9999;
    }
    .pac-item {
        padding: 8px 12px;
        font-size: 0.875rem;
        cursor: pointer;
        border-top: 1px solid rgba(120, 113, 108, 0.1);
    }
    .pac-item:first-child { border-top: none; }
    .pac-item:hover, .pac-item-selected { background-color: rgba(89, 52, 255, 0.05); }
    .pac-icon { display: none; }
    .pac-item-query { font-size: 0.875rem; color: #1e293b; }
    .pac-matched { font-weight: 600; }
</style>
<script>
    function initGooglePlacesAutocomplete() {
        var fields = [
            { input: 'hero_moving_from', hidden: 'hero_origin_city', model: 'moving_from' },
            { input: 'hero_moving_to', hidden: 'hero_destination_city', model: 'moving_to' }
        ];

        // Suppression flag: prevents @input handler from resetting addressSelected
        // during programmatic value changes (Google selection, Chrome autofill re-insert)
        window._suppressAddressInput = {};
        // Tracks whether user manually typed (vs Chrome autofill filling the value)
        window._userTypedAddress = {};

        fields.forEach(function(field) {
            var inputEl = document.getElementById(field.input);
            var hiddenEl = document.getElementById(field.hidden);
            if (!inputEl) return;

            window._suppressAddressInput[field.model] = false;
            window._userTypedAddress[field.model] = false;

            // Reset typing flag on focus so Chrome autofill detection works fresh
            inputEl.addEventListener('focus', function() {
                window._userTypedAddress[field.model] = false;
            });

            var autocomplete = new google.maps.places.Autocomplete(inputEl, {
                componentRestrictions: { country: 'ca' },
                fields: ['address_components', 'formatted_address'],
                types: ['address']
            });

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.address_components) return;

                // Suppress @input and @blur handlers during programmatic update
                window._suppressAddressInput[field.model] = true;

                var address = place.formatted_address || inputEl.value;
                inputEl.value = address;

                var alpineData = Alpine.$data(inputEl.closest('[x-data]'));
                if (alpineData && alpineData.formData) {
                    alpineData.formData[field.model] = address;
                    alpineData.markAddressSelected(field.model);
                }

                var city = '';
                for (var i = 0; i < place.address_components.length; i++) {
                    var component = place.address_components[i];
                    var types = component.types;
                    if (types.indexOf('locality') !== -1) {
                        city = component.long_name;
                        break;
                    } else if (types.indexOf('sublocality') !== -1 && !city) {
                        city = component.long_name;
                    } else if (types.indexOf('administrative_area_level_2') !== -1 && !city) {
                        city = component.long_name;
                    }
                }
                hiddenEl.value = city;

                inputEl.blur();

                // Re-enable handlers after all events settle
                setTimeout(function() {
                    window._suppressAddressInput[field.model] = false;
                }, 500);
            });

            inputEl.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    var pacContainer = document.querySelector('.pac-container');
                    if (pacContainer && pacContainer.style.display !== 'none' && pacContainer.offsetHeight > 0) {
                        e.preventDefault();
                    }
                }
            });

            // Chrome autofill: re-insert text to trigger Google autocomplete dropdown
            // Only runs when Chrome filled the value without user typing (actual autofill)
            inputEl.addEventListener('change', function() {
                // Skip if user was manually typing — only handle Chrome autofill
                if (window._userTypedAddress && window._userTypedAddress[field.model]) return;
                var alpineData = Alpine.$data(inputEl.closest('[x-data]'));
                if (inputEl.value && alpineData && !alpineData.addressSelected[field.model]) {
                    window._suppressAddressInput[field.model] = true;
                    var val = inputEl.value;
                    inputEl.focus();
                    inputEl.value = val;
                    inputEl.dispatchEvent(new Event('input', { bubbles: true }));
                    if (alpineData.formData) alpineData.formData[field.model] = val;
                    // Re-enable after Google autocomplete has time to show
                    setTimeout(function() {
                        window._suppressAddressInput[field.model] = false;
                    }, 500);
                }
            });
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_api_key') }}&libraries=places&callback=initGooglePlacesAutocomplete&loading=async" async></script>
<script>
    // Fallback: if Google Places hasn't loaded within 5s, allow form submission without address selection
    window._googlePlacesUnavailable = false;
    setTimeout(function() {
        if (typeof google === 'undefined' || !google.maps || !google.maps.places) {
            window._googlePlacesUnavailable = true;
        }
    }, 5000);

    // Populate UTM hidden inputs from URL params
    (function() {
        var params = new URLSearchParams(window.location.search);
        ['utm_source','utm_medium','utm_campaign'].forEach(function(k) {
            var el = document.getElementById('hero_' + k);
            if (el && params.get(k)) el.value = params.get(k);
        });
    })();
</script>
<?php endif; ?>
@endsection
