@extends('layouts.app')
@section('title', 'Moving Blog | Tips & Guides | Unitas Movers')
@section('meta_description', 'Expert moving tips, guides, and local Calgary advice from the Unitas Movers team.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-unitas-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-serif font-bold text-white">Moving Tips & Guides</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto">Expert advice to make your Calgary move smooth and stress-free.</p>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($posts as $post)
                <a href="{{ route('blog.show', $post) }}" class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md border border-stone/10 transition">
                    <div class="h-48 bg-unitas-green/5 flex items-center justify-center">
                        @if($post->featured_image)
                            <x-responsive-image :src="$post->featured_image" :alt="$post->title" class="w-full h-full object-cover" sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 33vw" />
                        @else
                            <svg class="w-12 h-12 text-unitas-green/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2"></path></svg>
                        @endif
                    </div>
                    <div class="p-5">
                        <span class="text-xs font-semibold text-meadow uppercase">{{ $post->category }}</span>
                        <h2 class="mt-2 text-lg font-semibold text-slate-dark group-hover:text-unitas-green transition">{{ $post->title }}</h2>
                        @if($post->excerpt)
                            <p class="mt-2 text-stone text-sm">{{ Str::limit($post->excerpt, 120) }}</p>
                        @endif
                        <p class="mt-3 text-xs text-stone">{{ $post->published_at?->format('M d, Y') }}</p>
                    </div>
                </a>
            @empty
                <div class="col-span-3 text-center py-12">
                    <p class="text-stone text-lg">Blog posts coming soon! Check back for moving tips and guides.</p>
                </div>
            @endforelse
        </div>
        <div class="mt-8">{{ $posts->links() }}</div>
    </div>
</section>
@endsection
