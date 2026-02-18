{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- Homepage --}}
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    {{-- Services index --}}
    <url>
        <loc>{{ url('/services') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    {{-- Areas index --}}
    <url>
        <loc>{{ url('/areas') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    {{-- Blog index --}}
    <url>
        <loc>{{ url('/blog') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>

    {{-- Get a Quote --}}
    <url>
        <loc>{{ url('/get-a-quote') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>

    {{-- Pricing --}}
    <url>
        <loc>{{ url('/pricing') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>

    {{-- About --}}
    <url>
        <loc>{{ url('/about') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>

    {{-- Licensed & Insured --}}
    <url>
        <loc>{{ url('/about/licensed-insured') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>

    {{-- Privacy Policy --}}
    <url>
        <loc>{{ url('/privacy-policy') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>

    {{-- Terms of Service --}}
    <url>
        <loc>{{ url('/terms-of-service') }}</loc>
        <lastmod>{{ now()->toDateString() }}</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>

    {{-- Individual Services --}}
    @foreach ($services as $service)
    <url>
        <loc>{{ url('/services/' . $service->slug) }}</loc>
        <lastmod>{{ $service->updated_at->toDateString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    {{-- Individual Areas --}}
    @foreach ($areas as $area)
    <url>
        <loc>{{ url('/areas/' . $area->slug) }}</loc>
        <lastmod>{{ $area->updated_at->toDateString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    {{-- Routes --}}
    @foreach ($routes as $route)
    <url>
        <loc>{{ url('/routes/' . $route->slug) }}</loc>
        <lastmod>{{ $route->updated_at->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach

    {{-- Blog Posts --}}
    @foreach ($blogPosts as $post)
    <url>
        <loc>{{ url('/blog/' . $post->slug) }}</loc>
        <lastmod>{{ $post->updated_at->toDateString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
</urlset>
