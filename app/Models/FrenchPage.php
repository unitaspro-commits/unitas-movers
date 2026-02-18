<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrenchPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'locale',
        'meta_title',
        'meta_description',
        'h1',
        'body',
        'english_equivalent_url',
        'faq_json',
        'canonical_url',
        'og_image',
        'is_published',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'faq_json' => 'array',
            'is_published' => 'boolean',
        ];
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
