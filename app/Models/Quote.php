<?php

namespace App\Models;

use App\Enums\MoveSize;
use App\Enums\QuoteStatus;
use App\Enums\ReferralSource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'moving_from',
        'moving_to',
        'move_date',
        'move_size',
        'services_needed',
        'additional_notes',
        'preferred_language',
        'referral_source',
        'estimated_distance_km',
        'origin_city',
        'destination_city',
        'status',
        'quoted_amount',
        'final_amount',
        'internal_notes',
        'assigned_to',
        'contacted_at',
        'quoted_at',
        'booked_at',
        'completed_at',
        'source_page',
        'utm_source',
        'utm_medium',
        'utm_campaign',
    ];

    protected function casts(): array
    {
        return [
            'move_date' => 'date',
            'services_needed' => 'array',
            'status' => QuoteStatus::class,
            'move_size' => MoveSize::class,
            'referral_source' => ReferralSource::class,
            'quoted_amount' => 'decimal:2',
            'final_amount' => 'decimal:2',
            'contacted_at' => 'datetime',
            'quoted_at' => 'datetime',
            'booked_at' => 'datetime',
            'completed_at' => 'datetime',
        ];
    }

    // ── Relationships ────────────────────────────────────────────────

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function activities(): HasMany
    {
        return $this->hasMany(QuoteActivity::class)->orderByDesc('created_at');
    }

    // ── Status Management ────────────────────────────────────────────

    public function transitionTo(QuoteStatus $newStatus, ?int $userId = null, ?string $note = null): void
    {
        $oldStatus = $this->status;

        if ($oldStatus === $newStatus) {
            return;
        }

        $this->status = $newStatus;

        // Set timestamp for the corresponding status
        match ($newStatus) {
            QuoteStatus::Contacted => $this->contacted_at = now(),
            QuoteStatus::Quoted => $this->quoted_at = now(),
            QuoteStatus::Booked => $this->booked_at = now(),
            QuoteStatus::Completed => $this->completed_at = now(),
            default => null,
        };

        $this->save();

        // Log the activity
        $this->activities()->create([
            'user_id' => $userId,
            'type' => 'status_change',
            'summary' => "Status changed from {$oldStatus->label()} to {$newStatus->label()}",
            'details' => $note,
            'metadata' => [
                'old_status' => $oldStatus->value,
                'new_status' => $newStatus->value,
            ],
        ]);
    }

    public function addNote(string $note, ?int $userId = null): QuoteActivity
    {
        return $this->activities()->create([
            'user_id' => $userId,
            'type' => 'note',
            'summary' => str()->limit($note, 100),
            'details' => $note,
        ]);
    }

    // ── Scopes ───────────────────────────────────────────────────────

    public function scopeNew($query)
    {
        return $query->where('status', QuoteStatus::New);
    }

    public function scopeActive($query)
    {
        return $query->whereIn('status', [
            QuoteStatus::New,
            QuoteStatus::Contacted,
            QuoteStatus::Quoted,
            QuoteStatus::Booked,
        ]);
    }

    public function scopeRequiresFollowUp($query)
    {
        return $query->where('status', QuoteStatus::New)
            ->where('created_at', '<', now()->subHours(24));
    }

    public function scopeByDateRange($query, $from, $to)
    {
        return $query->whereBetween('created_at', [$from, $to]);
    }

    public function scopeByService($query, string $service)
    {
        return $query->whereJsonContains('services_needed', $service);
    }

    // ── Computed Attributes ──────────────────────────────────────────

    public function getIsUrgentAttribute(): bool
    {
        return $this->status === QuoteStatus::New
            && $this->created_at->lt(now()->subHours(24));
    }

    public function getDaysUntilMoveAttribute(): ?int
    {
        if (! $this->move_date) {
            return null;
        }

        return (int) now()->startOfDay()->diffInDays($this->move_date, false);
    }

    public function getServicesListAttribute(): string
    {
        return collect($this->services_needed ?? [])
            ->map(fn ($s) => ucfirst($s))
            ->join(', ');
    }
}
