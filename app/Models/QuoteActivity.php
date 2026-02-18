<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuoteActivity extends Model
{
    protected $fillable = [
        'quote_id',
        'user_id',
        'type',
        'summary',
        'details',
        'metadata',
    ];

    protected function casts(): array
    {
        return [
            'metadata' => 'array',
        ];
    }

    public function quote(): BelongsTo
    {
        return $this->belongsTo(Quote::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getIconAttribute(): string
    {
        return match ($this->type) {
            'status_change' => 'heroicon-o-arrow-path',
            'note' => 'heroicon-o-pencil-square',
            'email_sent' => 'heroicon-o-paper-airplane',
            'email_received' => 'heroicon-o-envelope',
            'phone_call' => 'heroicon-o-phone',
            'quote_sent' => 'heroicon-o-document-text',
            'follow_up' => 'heroicon-o-bell',
            'system' => 'heroicon-o-cog-6-tooth',
            default => 'heroicon-o-information-circle',
        };
    }
}
