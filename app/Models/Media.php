<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    ];

    protected function casts(): array
    {
        return [
            'width' => 'integer',
            'height' => 'integer',
            'size_bytes' => 'integer',
        ];
    }

    public function getDimensionsAttribute(): string
    {
        if ($this->width && $this->height) {
            return "{$this->width}×{$this->height}";
        }

        return 'Unknown';
    }
}
