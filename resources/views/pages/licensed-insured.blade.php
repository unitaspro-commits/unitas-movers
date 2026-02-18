@extends('layouts.app')
@section('title', 'Licensed & Insured Movers Calgary | Unitas Movers')
@section('meta_description', 'Unitas Movers Calgary is fully licensed and insured. Full liability coverage, WCB coverage, and proper permits for every move.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Licensed & Insured Movers</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto">Your belongings are fully protected with Unitas Movers.</p>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <h2>Full Insurance Coverage</h2>
            <p>Every move with Unitas Movers is backed by comprehensive insurance coverage. We carry full liability insurance, protecting your belongings from the moment we pick them up until they're safely placed in your new home.</p>
            <h2>Licensed & Compliant</h2>
            <p>Unitas Movers holds all required business licenses and permits for operating in Calgary and Alberta. Our team is WCB covered, giving you peace of mind that you're working with a legitimate, professional moving company.</p>
            <h2>Why It Matters</h2>
            <p>Hiring unlicensed movers puts your belongings at risk. With Unitas Movers, you get the security of knowing that your move is protected every step of the way.</p>
        </div>
        <div class="mt-12 text-center">
            <a href="{{ route('quote.create') }}" class="inline-block bg-unitas-green hover:bg-forest text-white px-8 py-3 rounded-lg font-bold transition">Get Your Free Quote</a>
        </div>
    </div>
</section>
@endsection
