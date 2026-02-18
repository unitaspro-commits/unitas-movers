@props([
    'src' => null,
    'alt' => '',
    'class' => '',
    'sizes' => '100vw',
    'loading' => 'lazy',
    'width' => null,
    'height' => null,
])

@if($src)
    @php
        $isExternal = str_starts_with($src, 'http://') || str_starts_with($src, 'https://');
        $variants = [];

        if (!$isExternal) {
            // Build variant paths from naming convention
            $directory = pathinfo($src, PATHINFO_DIRNAME);
            $basename = pathinfo($src, PATHINFO_FILENAME);

            $variantSizes = ['thumb' => 400, 'medium' => 800, 'large' => 1200];
            $disk = \Illuminate\Support\Facades\Storage::disk('public');

            foreach ($variantSizes as $name => $w) {
                $variantPath = "{$directory}/{$basename}-{$name}.webp";
                if ($disk->exists($variantPath)) {
                    $variants[$w] = asset("storage/{$variantPath}");
                }
            }
        }
    @endphp

    @if($isExternal)
        <img
            src="{{ $src }}"
            alt="{{ $alt }}"
            @if($class) class="{{ $class }}" @endif
            @if($width) width="{{ $width }}" @endif
            @if($height) height="{{ $height }}" @endif
            loading="{{ $loading }}"
        >
    @elseif(count($variants) > 0)
        <picture>
            <source
                type="image/webp"
                srcset="{{ collect($variants)->map(fn($url, $w) => "{$url} {$w}w")->implode(', ') }}"
                sizes="{{ $sizes }}"
            >
            <img
                src="{{ asset("storage/{$src}") }}"
                alt="{{ $alt }}"
                @if($class) class="{{ $class }}" @endif
                @if($width) width="{{ $width }}" @endif
                @if($height) height="{{ $height }}" @endif
                loading="{{ $loading }}"
            >
        </picture>
    @else
        <img
            src="{{ asset("storage/{$src}") }}"
            alt="{{ $alt }}"
            @if($class) class="{{ $class }}" @endif
            @if($width) width="{{ $width }}" @endif
            @if($height) height="{{ $height }}" @endif
            loading="{{ $loading }}"
        >
    @endif
@endif
