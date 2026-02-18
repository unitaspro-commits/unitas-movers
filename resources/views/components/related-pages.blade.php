@props(['relatedPages' => []])

@php
    $services = $relatedPages['services'] ?? collect();
    $areas = $relatedPages['areas'] ?? collect();
    $blogPosts = $relatedPages['blog_posts'] ?? collect();
    $hasAny = $services->count() || $areas->count() || $blogPosts->count();
@endphp

@if($hasAny)
<div class="mt-16 border-t border-stone/10 pt-12 space-y-12">

    @if($services->count())
    <div>
        <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Related Services</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($services as $service)
                <a href="{{ route('services.show', $service) }}" class="group bg-white rounded-lg p-4 shadow-sm hover:shadow-md border border-stone/10 transition">
                    <h3 class="font-semibold text-slate-dark text-sm group-hover:text-alpine-green transition">{{ $service->name }}</h3>
                </a>
            @endforeach
        </div>
    </div>
    @endif

    @if($areas->count())
    <div>
        <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Areas We Serve</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($areas as $area)
                <a href="{{ route('areas.show', $area) }}" class="group bg-white rounded-lg p-4 shadow-sm hover:shadow-md border border-stone/10 transition">
                    <h3 class="font-semibold text-slate-dark text-sm group-hover:text-alpine-green transition">{{ $area->name }}</h3>
                </a>
            @endforeach
        </div>
    </div>
    @endif

    @if($blogPosts->count())
    <div>
        <h2 class="text-2xl font-serif font-bold text-slate-dark mb-6">Related Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($blogPosts as $post)
                <a href="{{ route('blog.show', $post) }}" class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md border border-stone/10 transition">
                    <span class="text-xs font-semibold text-meadow uppercase">{{ $post->category }}</span>
                    <h3 class="mt-2 font-semibold text-slate-dark group-hover:text-alpine-green transition">{{ $post->title }}</h3>
                </a>
            @endforeach
        </div>
    </div>
    @endif

</div>
@endif
