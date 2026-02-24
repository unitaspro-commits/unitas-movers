<?php

namespace App\Models;

use App\Models\Concerns\ClearsSiteCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory, ClearsSiteCache;

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
        'highway_name',
        'highway_number',
        'seasonal_tips',
        'fuel_cost_estimate',
        'popular_move_months',
        'origin_housing_data',
        'dest_housing_data',
        'road_conditions_note',
        'notable_stops',
        'backhaul_discount',
        'elevation_change',
    ];

    protected function casts(): array
    {
        return [
            'faq_json' => 'array',
            'schema_json' => 'array',
            'origin_housing_data' => 'array',
            'dest_housing_data' => 'array',
            'is_bidirectional' => 'boolean',
            'is_published' => 'boolean',
            'backhaul_discount' => 'boolean',
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

    public function getNameAttribute(): string
    {
        return $this->origin_city . ' to ' . $this->dest_city;
    }

    public function getPriceRangeAttribute(): string
    {
        if ($this->price_range_min && $this->price_range_max) {
            return '$' . number_format($this->price_range_min) . ' – $' . number_format($this->price_range_max);
        }

        return 'Contact for quote';
    }

    public function getFuelEstimateDisplayAttribute(): string
    {
        if ($this->fuel_cost_estimate) {
            return '$' . number_format($this->fuel_cost_estimate);
        }

        return 'N/A';
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
