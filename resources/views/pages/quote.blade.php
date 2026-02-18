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

        <form method="POST" action="{{ route('quote.store') }}" class="space-y-8">
            @csrf

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
                        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required placeholder="(403) 000-0000"
                            class="w-full rounded-lg border border-stone/30 px-4 py-2.5 text-sm focus:border-unitas-green focus:ring-1 focus:ring-unitas-green">
                    </div>
                    <div class="md:col-span-2">
                        <label for="email" class="block text-sm font-medium text-slate-dark mb-1">Email Address *</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                            class="w-full rounded-lg border border-stone/30 px-4 py-2.5 text-sm focus:border-unitas-green focus:ring-1 focus:ring-unitas-green">
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
                            placeholder="Enter your current address"
                            class="w-full rounded-lg border border-stone/30 px-4 py-2.5 text-sm focus:border-unitas-green focus:ring-1 focus:ring-unitas-green">
                    </div>
                    <div>
                        <label for="moving_to" class="block text-sm font-medium text-slate-dark mb-1">Moving To *</label>
                        <input type="text" name="moving_to" id="moving_to" value="{{ old('moving_to') }}" required
                            placeholder="Enter your destination address"
                            class="w-full rounded-lg border border-stone/30 px-4 py-2.5 text-sm focus:border-unitas-green focus:ring-1 focus:ring-unitas-green">
                    </div>
                    <div>
                        <label for="move_date" class="block text-sm font-medium text-slate-dark mb-1">Move Date *</label>
                        <input type="date" name="move_date" id="move_date" value="{{ old('move_date') }}" required
                            min="{{ date('Y-m-d', strtotime('+1 day')) }}"
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
                <button type="submit" class="bg-unitas-green hover:bg-forest text-white px-10 py-4 rounded-lg font-bold text-lg transition shadow-lg">
                    Submit Quote Request
                </button>
                <p class="mt-3 text-sm text-stone">We'll respond within 2 hours during business hours (Mon–Sat 8am–6pm)</p>
            </div>
        </form>
    </div>
</section>
@endsection
