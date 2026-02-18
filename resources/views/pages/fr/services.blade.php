@extends('layouts.app')
@section('title', 'Services de Déménagement | Alpine Movers Calgary')
@section('content')
<section class="bg-alpine-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Nos Services de Déménagement</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto">Services complets de déménagement à Calgary. Local, longue distance, commercial, emballage et plus encore.</p>
        <a href="{{ route('services.index') }}" class="mt-6 inline-block bg-meadow hover:bg-forest text-white px-8 py-3 rounded-lg font-bold transition">Voir Tous les Services</a>
    </div>
</section>
@endsection
