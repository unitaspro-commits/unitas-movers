<?php

namespace App\Models;

use App\Models\Concerns\ClearsSiteCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    use HasFactory, ClearsSiteCache;

    protected $fillable = [
        'slug',
        'name',
        'area_type',
        'parent_id',
        'meta_title',
        'meta_description',
        'h1',
        'body',
        'latitude',
        'longitude',
        'population',
        'avg_home_price',
        'dominant_housing_type',
        'parking_restrictions',
        'elevator_booking_required',
        'access_notes',
        'nearby_landmarks',
        'move_complexity',
        'avg_move_cost_2bed',
        'walkability_notes',
        'faq_json',
        'schema_json',
        'canonical_url',
        'og_image',
        'is_published',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'faq_json' => 'array',
            'schema_json' => 'array',
            'is_published' => 'boolean',
            'elevator_booking_required' => 'boolean',
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7',
        ];
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Area::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Area::class, 'parent_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function blogPosts(): HasMany
    {
        return $this->hasMany(BlogPost::class, 'related_area_id');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    public function scopeOfType($query, string $type)
    {
        return $query->where('area_type', $type);
    }

    public function getFormattedHomePriceAttribute(): string
    {
        if ($this->avg_home_price) {
            return '$' . number_format($this->avg_home_price);
        }

        return 'N/A';
    }

    public function getFormattedMoveCostAttribute(): string
    {
        if ($this->avg_move_cost_2bed) {
            return '$' . number_format($this->avg_move_cost_2bed);
        }

        return 'N/A';
    }

    public function getComplexityLabelAttribute(): string
    {
        return match ($this->move_complexity) {
            'easy' => 'Easy',
            'medium' => 'Medium',
            'hard' => 'Hard',
            default => 'N/A',
        };
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
