<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'rating',
        'body',
        'service_id',
        'area_id',
        'source',
        'is_featured',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'rating' => 'integer',
        ];
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
