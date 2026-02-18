<?php

namespace App\Models;

use App\Services\ImageOptimizationService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    protected $fillable = [
        'path',
        'alt_text',
        'title',
        'width',
        'height',
        'format',
        'size_bytes',
        'variants',
    ];

    protected function casts(): array
    {
        return [
            'width' => 'integer',
            'height' => 'integer',
            'size_bytes' => 'integer',
            'variants' => 'array',
        ];
    }

    protected static function booted(): void
    {
        static::deleting(function (Media $media) {
            $disk = Storage::disk('public');

            // Delete variants
            if ($media->variants) {
                app(ImageOptimizationService::class)->deleteVariants($media->variants);
            }

            // Delete original file
            if ($media->path && $disk->exists($media->path)) {
                $disk->delete($media->path);
            }
        });
    }

    public function getDimensionsAttribute(): string
    {
        if ($this->width && $this->height) {
            return "{$this->width}×{$this->height}";
        }

        return 'Unknown';
    }

    public function getUrlAttribute(): string
    {
        return asset("storage/{$this->path}");
    }

    public function getThumbnailUrlAttribute(): ?string
    {
        return $this->getVariantUrl('thumb');
    }

    public function getMediumUrlAttribute(): ?string
    {
        return $this->getVariantUrl('medium');
    }

    public function getLargeUrlAttribute(): ?string
    {
        return $this->getVariantUrl('large');
    }

    protected function getVariantUrl(string $name): ?string
    {
        $variants = $this->variants;

        if (! $variants || ! isset($variants[$name]['path'])) {
            return null;
        }

        return asset("storage/{$variants[$name]['path']}");
    }
}
