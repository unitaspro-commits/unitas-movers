<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'meta_title',
        'meta_description',
        'excerpt',
        'body',
        'featured_image',
        'category',
        'target_keyword',
        'related_service_id',
        'related_area_id',
        'is_pillar',
        'faq_json',
        'canonical_url',
        'og_image',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'faq_json' => 'array',
            'is_pillar' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function relatedService(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'related_service_id');
    }

    public function relatedArea(): BelongsTo
    {
        return $this->belongsTo(Area::class, 'related_area_id');
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    public function scopeOfCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    public function getIsPublishedAttribute(): bool
    {
        return $this->published_at && $this->published_at->lte(now());
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
