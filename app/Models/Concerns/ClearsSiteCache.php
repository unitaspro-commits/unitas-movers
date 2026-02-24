<?php

namespace App\Models\Concerns;

use Illuminate\Support\Facades\Cache;
use Spatie\ResponseCache\Facades\ResponseCache;

trait ClearsSiteCache
{
    public static function bootClearsSiteCache(): void
    {
        static::saved(function () {
            Cache::forget('sitemap');
            Cache::forget('internal_links:' . static::class);
            ResponseCache::clear();
        });

        static::deleted(function () {
            Cache::forget('sitemap');
            Cache::forget('internal_links:' . static::class);
            ResponseCache::clear();
        });
    }
}
