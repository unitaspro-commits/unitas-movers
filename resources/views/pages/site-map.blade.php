@extends('layouts.app')
@section('title', 'Site Map | Unitas Movers')
@section('meta_description', 'Complete site map of Unitas Movers. Browse all pages including services, areas served, moving routes, blog posts, and more.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-primary py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/60 text-sm mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a> &rsaquo;
            <span class="text-white">Site Map</span>
        </nav>
        <h1 class="text-3xl lg:text-4xl font-extrabold text-white">Site Map</h1>
        <p class="mt-3 text-white/70 max-w-2xl">Browse all pages on our website.</p>
    </div>
</section>

<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            {{-- Main Pages --}}
            <div>
                <h2 class="text-xl font-bold text-dark mb-4 pb-2 border-b border-gray-200">Main Pages</h2>
                <ul class="space-y-2.5">
                    <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Home</a></li>
                    <li><a href="{{ route('services.index') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Services</a></li>
                    <li><a href="{{ route('areas.index') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Areas Served</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Blog</a></li>
                    <li><a href="{{ route('quote.create') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Get a Free Quote</a></li>
                    <li><a href="{{ route('pricing') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Pricing</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">About Us</a></li>
                    <li><a href="{{ route('about.licensed-insured') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Licensed & Insured</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Terms of Service</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h2 class="text-xl font-bold text-dark mb-4 pb-2 border-b border-gray-200">Services <span class="text-gray-400 font-normal text-sm">({{ $services->count() }})</span></h2>
                <ul class="space-y-2.5">
                    @foreach($services as $service)
                        <li><a href="{{ route('services.show', $service) }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">{{ $service->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Blog Posts --}}
            <div>
                <h2 class="text-xl font-bold text-dark mb-4 pb-2 border-b border-gray-200">Blog Posts <span class="text-gray-400 font-normal text-sm">({{ $posts->count() }})</span></h2>
                <ul class="space-y-2.5">
                    @foreach($posts as $post)
                        <li><a href="{{ route('blog.show', $post) }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">{{ $post->title }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Areas — Quadrants --}}
            @if($quadrants->count())
            <div>
                <h2 class="text-xl font-bold text-dark mb-4 pb-2 border-b border-gray-200">Calgary Quadrants <span class="text-gray-400 font-normal text-sm">({{ $quadrants->count() }})</span></h2>
                <ul class="space-y-2.5">
                    @foreach($quadrants as $area)
                        <li><a href="{{ route('areas.show', $area) }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">{{ $area->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Areas — Neighborhoods --}}
            @if($neighborhoods->count())
            <div>
                <h2 class="text-xl font-bold text-dark mb-4 pb-2 border-b border-gray-200">Neighborhoods <span class="text-gray-400 font-normal text-sm">({{ $neighborhoods->count() }})</span></h2>
                <ul class="space-y-2.5">
                    @foreach($neighborhoods as $area)
                        <li><a href="{{ route('areas.show', $area) }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">{{ $area->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Areas — Towns --}}
            @if($towns->count())
            <div>
                <h2 class="text-xl font-bold text-dark mb-4 pb-2 border-b border-gray-200">Surrounding Towns <span class="text-gray-400 font-normal text-sm">({{ $towns->count() }})</span></h2>
                <ul class="space-y-2.5">
                    @foreach($towns as $area)
                        <li><a href="{{ route('areas.show', $area) }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">{{ $area->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Moving Routes --}}
            @if($routes->count())
            <div>
                <h2 class="text-xl font-bold text-dark mb-4 pb-2 border-b border-gray-200">Moving Routes <span class="text-gray-400 font-normal text-sm">({{ $routes->count() }})</span></h2>
                <ul class="space-y-2.5">
                    @foreach($routes as $route)
                        <li class="text-gray-600 text-sm font-medium">{{ $route->origin_city }} to {{ $route->dest_city }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- French Pages --}}
            <div>
                <h2 class="text-xl font-bold text-dark mb-4 pb-2 border-b border-gray-200">Pages en Fran&ccedil;ais</h2>
                <ul class="space-y-2.5">
                    <li><a href="{{ route('fr.home') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Accueil</a></li>
                    <li><a href="{{ route('fr.services') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Services</a></li>
                    <li><a href="{{ route('fr.quote') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">Soumission Gratuite</a></li>
                    <li><a href="{{ route('fr.about') }}" class="text-gray-600 hover:text-primary transition text-sm font-medium">&Agrave; Propos</a></li>
                </ul>
            </div>

        </div>
    </div>
</section>
@endsection
