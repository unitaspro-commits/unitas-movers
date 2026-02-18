@extends('layouts.app')
@section('title', 'Alpine Movers Calgary — Déménagement Écologique')
@section('content')
<section class="bg-alpine-green py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl lg:text-5xl font-serif font-bold text-white">Déménageurs Écologiques à Calgary</h1>
        <p class="mt-6 text-white/80 text-lg max-w-2xl mx-auto">Déménageurs professionnels, assurés et bilingues. Service en français disponible pour tous vos besoins de déménagement.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('quote.create') }}" class="bg-meadow hover:bg-forest text-white px-8 py-4 rounded-lg font-bold text-lg transition">Soumission Gratuite</a>
            <a href="tel:+14038002747" class="border-2 border-white/30 hover:border-white text-white px-8 py-4 rounded-lg font-semibold text-lg transition">(403) 800-2747</a>
        </div>
    </div>
</section>
@endsection
