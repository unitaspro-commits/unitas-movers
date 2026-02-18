@extends('layouts.app')
@section('title', 'Areas Served | Unitas Movers')
@section('meta_description', 'Unitas Movers serves all of Calgary and surrounding areas including Airdrie, Cochrane, Okotoks, and more. Find movers near you.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Areas We Serve</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto">Proudly serving Calgary and surrounding communities.</p>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($quadrants->count())
        <div class="mb-12">
            <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Calgary Quadrants</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($quadrants as $area)
                    <a href="{{ route('areas.show', $area) }}" class="bg-white rounded-lg p-5 shadow-sm hover:shadow-md border border-stone/10 transition text-center">
                        <h3 class="font-semibold text-slate-dark">{{ $area->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
        @if($neighborhoods->count())
        <div class="mb-12">
            <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Neighborhoods</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($neighborhoods as $area)
                    <a href="{{ route('areas.show', $area) }}" class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md border border-stone/10 transition">
                        <h3 class="font-semibold text-slate-dark text-sm">{{ $area->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
        @if($towns->count())
        <div>
            <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Surrounding Towns</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($towns as $area)
                    <a href="{{ route('areas.show', $area) }}" class="bg-white rounded-lg p-5 shadow-sm hover:shadow-md border border-stone/10 transition text-center">
                        <h3 class="font-semibold text-slate-dark">{{ $area->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
