<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    protected $fillable = [
        'from_path',
        'to_path',
        'status_code',
        'hit_count',
        'last_hit_at',
    ];

    protected function casts(): array
    {
        return [
            'status_code' => 'integer',
            'hit_count' => 'integer',
            'last_hit_at' => 'datetime',
        ];
    }

    public function recordHit(): void
    {
        $this->increment('hit_count');
        $this->update(['last_hit_at' => now()]);
    }
}
