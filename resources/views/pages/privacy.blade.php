@extends('layouts.app')
@section('title', 'Privacy Policy | Unitas Movers')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Privacy Policy</h1>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <p><strong>Last updated:</strong> {{ date('F Y') }}</p>
            <h2>Information We Collect</h2>
            <p>When you request a quote or use our services, we collect personal information including your name, phone number, email address, and moving addresses. This information is used solely to provide you with moving quotes and services.</p>
            <h2>How We Use Your Information</h2>
            <p>We use your personal information to: process your quote requests, communicate about your move, improve our services, and comply with legal obligations.</p>
            <h2>Data Protection</h2>
            <p>We implement appropriate security measures to protect your personal information. We do not sell, trade, or rent your personal information to third parties.</p>
            <h2>Contact Us</h2>
            <p>For questions about this privacy policy, please contact us at info@unitasmovers.ca or call (403) 800-2747.</p>
        </div>
    </div>
</section>
@endsection
