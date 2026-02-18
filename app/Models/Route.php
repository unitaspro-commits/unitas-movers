<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'origin_city',
        'dest_city',
        'distance_km',
        'drive_time_hours',
        'price_range_min',
        'price_range_max',
        'meta_title',
        'meta_description',
        'h1',
        'route_overview',
        'cost_breakdown',
        'destination_guide',
        'faq_json',
        'schema_json',
        'canonical_url',
        'og_image',
        'is_bidirectional',
        'is_published',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'faq_json' => 'array',
            'schema_json' => 'array',
            'is_bidirectional' => 'boolean',
            'is_published' => 'boolean',
            'drive_time_hours' => 'decimal:1',
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

    public function getPriceRangeAttribute(): string
    {
        if ($this->price_range_min && $this->price_range_max) {
            return '$' . number_format($this->price_range_min) . ' – $' . number_format($this->price_range_max);
        }

        return 'Contact for quote';
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
