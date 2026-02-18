<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
    protected $table = 'seo_meta';

    protected $fillable = [
        'page_key',
        'meta_title',
        'meta_description',
        'h1',
        'canonical_url',
        'schema_json',
        'og_image',
    ];

    protected function casts(): array
    {
        return [
            'schema_json' => 'array',
        ];
    }

    public static function forPage(string $key): ?self
    {
        return static::where('page_key', $key)->first();
    }
}
