@extends('layouts.app')
@section('title', 'Customer Reviews | Calgary Movers | Unitas Movers')
@section('meta_description', 'Unitas Movers rated ' . number_format($avgRating, 1) . '/5 from ' . $totalReviews . '+ reviews. See why Calgary trusts us with their moves. Call (403) 800-2747.')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-primary py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-white/60 text-sm mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a> &rsaquo;
            <span class="text-white">Reviews</span>
        </nav>
        <h1 class="text-3xl lg:text-4xl font-extrabold text-white">Customer Reviews</h1>
        <p class="mt-3 text-white/80 max-w-2xl">See what our customers have to say about their experience with Unitas Movers.</p>
    </div>
</section>

{{-- Aggregate Rating Banner --}}
<section class="bg-white border-b border-gray-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 text-center">
        <div class="flex items-center justify-center gap-2 mb-2">
            @for($i = 1; $i <= 5; $i++)
                @if($i <= floor($avgRating))
                    <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                @elseif($i - $avgRating < 1)
                    <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                @else
                    <svg class="w-8 h-8 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                @endif
            @endfor
        </div>
        <p class="text-3xl font-bold text-dark">{{ number_format($avgRating, 1) }}<span class="text-lg text-gray-500 font-normal">/5</span></p>
        <p class="text-gray-500 mt-1">Based on {{ $totalReviews }} customer reviews</p>
        <p class="text-gray-400 text-sm mt-3">Unitas Movers provides <a href="{{ route('services.index') }}" class="text-primary hover:underline">local and long-distance moving</a>, <a href="{{ route('services.show', 'packing-unpacking') }}" class="text-primary hover:underline">packing</a>, <a href="{{ route('services.show', 'piano-moving') }}" class="text-primary hover:underline">piano moving</a>, and more across <a href="{{ route('areas.index') }}" class="text-primary hover:underline">Calgary and surrounding areas</a>.</p>
    </div>
</section>

<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Featured Reviews --}}
        @if($featuredReviews->count())
        <div class="mb-16">
            <h2 class="text-2xl font-extrabold text-dark mb-8 text-center">Featured Reviews</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($featuredReviews as $review)
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex flex-col">
                        <div class="flex items-center gap-0.5 mb-3">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            @endfor
                        </div>
                        <p class="text-gray-500 flex-1">{{ $review->body }}</p>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="font-semibold text-dark text-sm">{{ $review->customer_name }}</span>
                            @if($review->source)
                                <span class="text-xs bg-primary/10 text-primary px-2 py-1 rounded-full font-medium capitalize">{{ $review->source }}</span>
                            @endif
                        </div>
                        @if($review->service)
                            <p class="text-xs text-gray-400 mt-2">Service: <a href="{{ route('services.show', $review->service) }}" class="text-primary hover:underline">{{ $review->service->name }}</a></p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        @endif

        {{-- All Reviews --}}
        @if($otherReviews->count())
        <div>
            <h2 class="text-2xl font-extrabold text-dark mb-8 text-center">All Reviews</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($otherReviews as $review)
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex flex-col">
                        <div class="flex items-center gap-0.5 mb-3">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            @endfor
                        </div>
                        <p class="text-gray-500 flex-1">{{ $review->body }}</p>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="font-semibold text-dark text-sm">{{ $review->customer_name }}</span>
                            @if($review->source)
                                <span class="text-xs bg-primary/10 text-primary px-2 py-1 rounded-full font-medium capitalize">{{ $review->source }}</span>
                            @endif
                        </div>
                        @if($review->service)
                            <p class="text-xs text-gray-400 mt-2">Service: <a href="{{ route('services.show', $review->service) }}" class="text-primary hover:underline">{{ $review->service->name }}</a></p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        @endif

        <div class="mt-12 bg-primary rounded-xl p-8 text-center">
            <h2 class="text-2xl font-extrabold text-white">Ready for a 5-Star Moving Experience?</h2>
            <p class="mt-2 text-white/80">Join hundreds of satisfied Calgary customers. Get a free quote today.</p>
            <a href="{{ route('quote.create') }}" class="mt-4 inline-block bg-white/20 hover:bg-white/30 text-white px-8 py-3 rounded-lg font-bold transition">Get Your Free Quote</a>
        </div>
    </div>
</section>
@endsection
