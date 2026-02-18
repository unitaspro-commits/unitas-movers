@extends('layouts.app')
@section('title', 'À Propos | Alpine Movers Calgary')
@section('content')
<section class="bg-alpine-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">À Propos d'Alpine Movers</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto">Entreprise de déménagement écologique de confiance à Calgary. Plus de 2 500 déménagements complétés, service bilingue.</p>
        <a href="{{ route('about') }}" class="mt-6 inline-block bg-meadow hover:bg-forest text-white px-8 py-3 rounded-lg font-bold transition">En Savoir Plus (Anglais)</a>
    </div>
</section>
@endsection
