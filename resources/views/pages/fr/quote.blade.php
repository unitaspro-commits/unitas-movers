@extends('layouts.app')
@section('title', 'Soumission Gratuite | Unitas Movers')
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Demander une Soumission</h1>
        <p class="mt-4 text-white/80">Veuillez utiliser notre formulaire anglais pour le moment. Service en français garanti.</p>
        <a href="{{ route('quote.create') }}" class="mt-6 inline-block bg-meadow hover:bg-forest text-white px-8 py-3 rounded-lg font-bold transition">Formulaire de Soumission</a>
    </div>
</section>
@endsection
