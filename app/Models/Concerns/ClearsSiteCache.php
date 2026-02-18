<?php

namespace App\Models\Concerns;

use Illuminate\Support\Facades\Cache;

trait ClearsSiteCache
{
    public static function bootClearsSiteCache(): void
    {
        static::saved(function () {
            Cache::forget('sitemap');
            Cache::forget('internal_links:' . static::class);
        });

        static::deleted(function () {
            Cache::forget('sitemap');
            Cache::forget('internal_links:' . static::class);
        });
    }
}
