@extends('layouts.app')
@section('title', 'About Alpine Movers Calgary | Licensed & Insured Movers')
@section('meta_description', 'Learn about Alpine Movers Calgary — your trusted, licensed, insured, and affordable moving company. Fast & flexible service, transparent pricing, 2,500+ moves completed.')
@section('content')
<section class="bg-alpine-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">About Alpine Movers Calgary</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto">Calgary's trusted, affordable moving company.</p>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <h2>Our Story</h2>
            <p>Alpine Movers was founded with a simple mission: provide Calgary families and businesses with reliable, honest, and affordable moving services. We believe that a great move starts with great people, transparent pricing, and respect for your belongings.</p>
            <h2>What Sets Us Apart</h2>
            <ul>
                <li><strong>Affordable Pricing:</strong> Competitive rates without compromising on quality or care.</li>
                <li><strong>Fast & Flexible:</strong> Same-day, evening, and weekend moves available to fit your schedule.</li>
                <li><strong>Transparent Pricing:</strong> No hidden fees, no surprise charges. Ever.</li>
                <li><strong>Licensed & Insured:</strong> Full liability coverage for your peace of mind.</li>
                <li><strong>Community Focused:</strong> Proudly serving all of Calgary and surrounding communities.</li>
            </ul>
            <h2>Our Numbers</h2>
            <p>With over 2,500 moves completed, a 4.9-star Google rating, and 10+ years of experience, we're proud to be one of Calgary's most trusted moving companies.</p>
        </div>
        <div class="mt-12 bg-forest rounded-xl p-8 text-center">
            <h2 class="text-2xl font-serif font-bold text-white">Ready to Experience the Alpine Difference?</h2>
            <a href="{{ route('quote.create') }}" class="mt-4 inline-block bg-meadow hover:bg-alpine-green text-white px-8 py-3 rounded-lg font-bold transition">Get Your Free Quote</a>
        </div>
    </div>
</section>
@endsection
