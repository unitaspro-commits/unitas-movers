@extends('layouts.app')

@section('title', 'Get a Free Moving Quote | Unitas Movers')
@section('meta_description', 'Request your free moving quote from Unitas Movers. Fill out our quick form and we\'ll respond within 2 hours during business hours.')

@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection

@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Get Your Free Moving Quote</h1>
        <p class="mt-4 text-white/80">Fill out the form below and we'll get back to you within 2 hours during business hours.</p>
    </div>
</section>

<section class="py-12 lg:py-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="mb-8 bg-meadow/10 border border-meadow/20 rounded-xl p-6 text-center">
                <svg class="w-12 h-12 text-meadow mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h2 class="text-xl font-semibold text-unitas-green">Quote Request Submitted!</h2>
                <p class="mt-2 text-stone">{{ session('success') }}</p>
            </div>
        @endif

        @if($errors->any())
            <div class="mb-8 bg-summit-red/10 border border-summit-red/20 rounded-xl p-6">
                <h3 class="font-semibold text-summit-red mb-2">Please correct the following errors:</h3>
                <ul class="list-disc list-inside text-sm text-summit-red/80 space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('quote.store') }}" class="space-y-8"
            x-data="{ submitting: false, addressSelected: { moving_from: {{ old('moving_from') ? 'true' : 'false' }}, moving_to: {{ old('moving_to') ? 'true' : 'false' }} }, addressErrors: { moving_from: false, moving_to: false }, fieldErrors: { phone: '', email: '' } }"
            @submit.prevent="
                if (submitting) return;
                fieldErrors.phone = ''; fieldErrors.email = '';
                if (!window._googlePlacesUnavailable && !addressSelected.moving_from) { addressErrors.moving_from = true; }
                if (!window._googlePlacesUnavailable && !addressSelected.moving_to) { addressErrors.moving_to = true; }
                var phoneVal = $el.querySelector('#phone').value;
                var emailVal = $el.querySelector('#email').value;
                if (phoneVal && phoneVal.replace(/\D/g,'').length < 10) { fieldErrors.phone = 'Please enter a valid phone number (at least 10 digits)'; }
                if (emailVal && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailVal)) { fieldErrors.email = 'Please enter a valid email address'; }
                var addressOk = window._googlePlacesUnavailable || (addressSelected.moving_from && addressSelected.moving_to);
                if (addressOk && !fieldErrors.phone && !fieldErrors.email) {
                    submitting = true;
                    var form = $el;
                    if (typeof grecaptcha !== 'undefined' && '{{ config('services.google.recaptcha_site_key') }}') {
                        grecaptcha.ready(function() {
                            grecaptcha.execute('{{ config('services.google.recaptcha_site_key') }}', {action: 'quote'}).then(function(token) {
                                document.getElementById('quote_recaptcha_token').value = token;
                                form.submit();
                            }).catch(function() { form.submit(); });
                        });
                    } else { form.submit(); }
                }
                else { $nextTick(() => { var e = $el.querySelector('.text-error'); if (e) e.scrollIntoView({ behavior: 'smooth', block: 'center' }); }); }
            ">
            @csrf
            <div style="position:absolute;left:-9999px;" aria-hidden="true">
                <input type="text" name="website" tabindex="-1" autocomplete="off">
            </div>
            <input type="hidden" name="recaptcha_token" id="quote_recaptcha_token">
            <input type="hidden" name="source_page" value="{{ url()->current() }}">
            <input type="hidden" name="utm_source" id="quote_utm_source">
            <input type="hidden" name="utm_medium" id="quote_utm_medium">
            <input type="hidden" name="utm_campaign" id="quote_utm_campaign">

            {{-- Personal Info --}}
            <div class="bg-white rounded-xl p-6 shadow-sm border border-stone/10">
                <h2 class="text-lg font-semibold text-slate-dark mb-4">Your Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="full_name" class="block text-sm font-medium text-slate-dark mb-1">Full Name *</label>
                        <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" required
                            class="w-full rounded-lg border border-stone/30 px-4 py-2.5 text-sm focus:border-unitas-green focus:ring-1 focus:ring-unitas-green">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-slate-dark mb-1">Phone Number *</label>
                        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required placeholder="(403) 000-0000" maxlength="20"
                            @input="fieldErrors.phone = ''"
                            @blur="if ($el.value && $el.value.replace(/\D/g,'').length < 10) fieldErrors.phone = 'Please enter a valid phone number (at least 10 digits)'"
                            :class="fieldErrors.phone ? 'border-error focus:border-error focus:ring-error' : 'border-stone/30 focus:border-unitas-green focus:ring-unitas-green'"
                            class="w-full rounded-lg border px-4 py-2.5 text-sm focus:ring-1">
                        <p x-show="fieldErrors.phone" x-cloak class="text-error text-xs font-medium mt-1" x-text="fieldErrors.phone"></p>
                    </div>
                    <div class="md:col-span-2">
                        <label for="email" class="block text-sm font-medium text-slate-dark mb-1">Email Address *</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                            @input="fieldErrors.email = ''"
                            @blur="if ($el.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($el.value)) fieldErrors.email = 'Please enter a valid email address'"
                            :class="fieldErrors.email ? 'border-error focus:border-error focus:ring-error' : 'border-stone/30 focus:border-unitas-green focus:ring-unitas-green'"
                            class="w-full rounded-lg border px-4 py-2.5 text-sm focus:ring-1">
                        <p x-show="fieldErrors.email" x-cloak class="text-error text-xs font-medium mt-1" x-text="fieldErrors.email"></p>
                    </div>
                </div>
            </div>

            {{-- Move Details --}}
            <div class="bg-white rounded-xl p-6 shadow-sm border border-stone/10">
                <h2 class="text-lg font-semibold text-slate-dark mb-4">Move Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="moving_from" class="block text-sm font-medium text-slate-dark mb-1">Moving From *</label>
                        <input type="text" name="moving_from" id="moving_from" value="{{ old('moving_from') }}" required
                            placeholder="Enter your current address" autocomplete="off"
                            @input="if (!(window._suppressAddressInput && window._suppressAddressInput.moving_from)) { addressSelected.moving_from = false; addressErrors.moving_from = false; if (window._userTypedAddress) window._userTypedAddress.moving_from = true; }"
                            @blur="setTimeout(() => { if (window._googlePlacesUnavailable) return; if (window._suppressAddressInput && window._suppressAddressInput.moving_from) return; if (document.activeElement === $el) return; if ($el.value && !addressSelected.moving_from) addressErrors.moving_from = true }, 300)"
                            :class="addressErrors.moving_from ? 'border-error focus:border-error focus:ring-error' : 'border-stone/30 focus:border-unitas-green focus:ring-unitas-green'"
                            class="w-full rounded-lg border px-4 py-2.5 text-sm focus:ring-1">
                        <p x-show="addressErrors.moving_from" x-cloak class="text-error text-xs font-medium mt-1">Please select an address from the dropdown</p>
                        <input type="hidden" name="origin_city" id="origin_city" value="{{ old('origin_city') }}">
                    </div>
                    <div>
                        <label for="moving_to" class="block text-sm font-medium text-slate-dark mb-1">Moving To *</label>
                        <input type="text" name="moving_to" id="moving_to" value="{{ old('moving_to') }}" required
                            placeholder="Enter your destination address" autocomplete="off"
                            @input="if (!(window._suppressAddressInput && window._suppressAddressInput.moving_to)) { addressSelected.moving_to = false; addressErrors.moving_to = false; if (window._userTypedAddress) window._userTypedAddress.moving_to = true; }"
                            @blur="setTimeout(() => { if (window._googlePlacesUnavailable) return; if (window._suppressAddressInput && window._suppressAddressInput.moving_to) return; if (document.activeElement === $el) return; if ($el.value && !addressSelected.moving_to) addressErrors.moving_to = true }, 300)"
                            :class="addressErrors.moving_to ? 'border-error focus:border-error focus:ring-error' : 'border-stone/30 focus:border-unitas-green focus:ring-unitas-green'"
                            class="w-full rounded-lg border px-4 py-2.5 text-sm focus:ring-1">
                        <p x-show="addressErrors.moving_to" x-cloak class="text-error text-xs font-medium mt-1">Please select an address from the dropdown</p>
                        <input type="hidden" name="destination_city" id="destination_city" value="{{ old('destination_city') }}">
                    </div>
                    <div>
                        <label for="move_date" class="block text-sm font-medium text-slate-dark mb-1">Move Date *</label>
                        <input type="date" name="move_date" id="move_date" value="{{ old('move_date') }}" required
                            min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                            max="{{ date('Y-m-d', strtotime('+2 years')) }}"
                            class="w-full rounded-lg border border-stone/30 px-4 py-2.5 text-sm focus:border-unitas-green focus:ring-1 focus:ring-unitas-green">
                    </div>
                    <div>
                        <label for="move_size" class="block text-sm font-medium text-slate-dark mb-1">Move Size *</label>
                        <select name="move_size" id="move_size" required
                            class="w-full rounded-lg border border-stone/30 px-4 py-2.5 text-sm focus:border-unitas-green focus:ring-1 focus:ring-unitas-green">
                            <option value="">Select size...</option>
                            @foreach($moveSizes as $size)
                                <option value="{{ $size->value }}" {{ old('move_size') === $size->value ? 'selected' : '' }}>
                                    {{ $size->label() }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            {{-- Services Needed --}}
            <div class="bg-white rounded-xl p-6 shadow-sm border border-stone/10">
                <h2 class="text-lg font-semibold text-slate-dark mb-4">Services Needed *</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    @php
                        $serviceOptions = [
                            'moving' => 'Moving (Loading & Unloading)',
                            'packing' => 'Packing',
                            'unpacking' => 'Unpacking',
                            'storage' => 'Storage',
                            'piano' => 'Piano Moving',
                            'furniture_assembly' => 'Furniture Assembly',
                            'junk_removal' => 'Junk Removal',
                            'other' => 'Other',
                        ];
                    @endphp
                    @foreach($serviceOptions as $value => $label)
                        <label class="flex items-center space-x-2 bg-snow rounded-lg p-3 cursor-pointer hover:bg-meadow/5 transition border border-stone/10">
                            <input type="checkbox" name="services_needed[]" value="{{ $value }}"
                                {{ in_array($value, old('services_needed', [])) ? 'checked' : '' }}
                                class="rounded border-stone/30 text-unitas-green focus:ring-unitas-green">
                            <span class="text-sm text-slate-dark">{{ $label }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            {{-- Additional Info --}}
            <div class="bg-white rounded-xl p-6 shadow-sm border border-stone/10">
                <h2 class="text-lg font-semibold text-slate-dark mb-4">Additional Information</h2>
                <div class="space-y-4">
                    <div>
                        <label for="additional_notes" class="block text-sm font-medium text-slate-dark mb-1">Special Instructions or Notes</label>
                        <textarea name="additional_notes" id="additional_notes" rows="3"
                            placeholder="Stairs, elevator, heavy items, special requirements..."
                            class="w-full rounded-lg border border-stone/30 px-4 py-2.5 text-sm focus:border-unitas-green focus:ring-1 focus:ring-unitas-green">{{ old('additional_notes') }}</textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="preferred_language" class="block text-sm font-medium text-slate-dark mb-1">Preferred Language</label>
                            <select name="preferred_language" id="preferred_language"
                                class="w-full rounded-lg border border-stone/30 px-4 py-2.5 text-sm focus:border-unitas-green focus:ring-1 focus:ring-unitas-green">
                                <option value="en" {{ old('preferred_language', 'en') === 'en' ? 'selected' : '' }}>English</option>
                                <option value="fr" {{ old('preferred_language') === 'fr' ? 'selected' : '' }}>Fran&ccedil;ais</option>
                            </select>
                        </div>
                        <div>
                            <label for="referral_source" class="block text-sm font-medium text-slate-dark mb-1">How Did You Hear About Us?</label>
                            <select name="referral_source" id="referral_source"
                                class="w-full rounded-lg border border-stone/30 px-4 py-2.5 text-sm focus:border-unitas-green focus:ring-1 focus:ring-unitas-green">
                                <option value="">Select...</option>
                                @foreach($referralSources as $source)
                                    <option value="{{ $source->value }}" {{ old('referral_source') === $source->value ? 'selected' : '' }}>
                                        {{ $source->label() }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Submit --}}
            <div class="text-center">
                <button type="submit" :disabled="submitting" class="bg-unitas-green hover:bg-forest text-white px-10 py-4 rounded-lg font-bold text-lg transition shadow-lg disabled:opacity-60 disabled:cursor-not-allowed">
                    <span x-show="!submitting">Submit Quote Request</span>
                    <span x-show="submitting" x-cloak class="flex items-center justify-center">
                        <svg class="animate-spin w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                        Submitting...
                    </span>
                </button>
                <p class="mt-3 text-sm text-stone">We'll respond within 2 hours during business hours (Mon–Sat 8am–6pm)</p>
            </div>
        </form>
    </div>
</section>
@endsection

@section('scripts')
@if(config('services.google.recaptcha_site_key'))
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha_site_key') }}"></script>
@endif
@if(config('services.google.maps_api_key'))
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
    .pac-item:hover, .pac-item-selected { background-color: rgba(34, 87, 47, 0.05); }
    .pac-icon { display: none; }
    .pac-item-query { font-size: 0.875rem; color: #1e293b; }
    .pac-matched { font-weight: 600; }
</style>
<script>
    function initGooglePlacesAutocomplete() {
        window._suppressAddressInput = window._suppressAddressInput || {};
        window._userTypedAddress = window._userTypedAddress || {};

        var fields = [
            { input: 'moving_from', hidden: 'origin_city' },
            { input: 'moving_to', hidden: 'destination_city' }
        ];

        fields.forEach(function(field) {
            var inputEl = document.getElementById(field.input);
            var hiddenEl = document.getElementById(field.hidden);
            if (!inputEl) return;

            window._suppressAddressInput[field.input] = false;
            window._userTypedAddress[field.input] = false;

            // Reset typing flag on focus so Chrome autofill detection works fresh
            inputEl.addEventListener('focus', function() {
                window._userTypedAddress[field.input] = false;
            });

            var autocomplete = new google.maps.places.Autocomplete(inputEl, {
                componentRestrictions: { country: 'ca' },
                fields: ['address_components', 'formatted_address'],
                types: ['address']
            });

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.address_components) return;

                window._suppressAddressInput[field.input] = true;

                inputEl.value = place.formatted_address || inputEl.value;

                var alpineData = Alpine.$data(inputEl.closest('[x-data]'));
                if (alpineData && alpineData.addressSelected) {
                    alpineData.addressSelected[field.input] = true;
                    alpineData.addressErrors[field.input] = false;
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
                setTimeout(function() { window._suppressAddressInput[field.input] = false; }, 500);
            });

            inputEl.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    var pacContainer = document.querySelector('.pac-container');
                    if (pacContainer && pacContainer.style.display !== 'none' && pacContainer.offsetHeight > 0) {
                        e.preventDefault();
                    }
                }
            });

            // Chrome autofill: re-insert text to trigger Google autocomplete
            // Only runs when Chrome filled the value without user typing (actual autofill)
            inputEl.addEventListener('change', function() {
                // Skip if user was manually typing — only handle Chrome autofill
                if (window._userTypedAddress && window._userTypedAddress[field.input]) return;
                var alpineData = Alpine.$data(inputEl.closest('[x-data]'));
                if (inputEl.value && alpineData && !alpineData.addressSelected[field.input]) {
                    window._suppressAddressInput[field.input] = true;
                    var val = inputEl.value;
                    inputEl.focus();
                    inputEl.value = val;
                    inputEl.dispatchEvent(new Event('input', { bubbles: true }));
                    setTimeout(function() { window._suppressAddressInput[field.input] = false; }, 500);
                }
            });
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_api_key') }}&libraries=places&callback=initGooglePlacesAutocomplete" async defer></script>
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
            var el = document.getElementById('quote_' + k);
            if (el && params.get(k)) el.value = params.get(k);
        });
    })();
</script>
@endif
@endsection
