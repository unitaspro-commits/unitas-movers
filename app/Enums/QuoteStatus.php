<?php

namespace App\Enums;

enum QuoteStatus: string
{
    case New = 'new';
    case Contacted = 'contacted';
    case Quoted = 'quoted';
    case Booked = 'booked';
    case Completed = 'completed';
    case Cancelled = 'cancelled';
    case NoResponse = 'no_response';

    public function label(): string
    {
        return match ($this) {
            self::New => 'New',
            self::Contacted => 'Contacted',
            self::Quoted => 'Quoted',
            self::Booked => 'Booked',
            self::Completed => 'Completed',
            self::Cancelled => 'Cancelled',
            self::NoResponse => 'No Response',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::New => 'info',
            self::Contacted => 'warning',
            self::Quoted => 'primary',
            self::Booked => 'success',
            self::Completed => 'gray',
            self::Cancelled => 'danger',
            self::NoResponse => 'gray',
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::New => 'heroicon-o-sparkles',
            self::Contacted => 'heroicon-o-phone',
            self::Quoted => 'heroicon-o-document-text',
            self::Booked => 'heroicon-o-check-circle',
            self::Completed => 'heroicon-o-flag',
            self::Cancelled => 'heroicon-o-x-circle',
            self::NoResponse => 'heroicon-o-clock',
        };
    }

    /**
     * Returns the allowed transitions from this status.
     */
    public function allowedTransitions(): array
    {
        return match ($this) {
            self::New => [self::Contacted, self::Cancelled],
            self::Contacted => [self::Quoted, self::NoResponse, self::Cancelled],
            self::Quoted => [self::Booked, self::NoResponse, self::Cancelled],
            self::Booked => [self::Completed, self::Cancelled],
            self::Completed => [], // terminal state
            self::Cancelled => [self::New], // can reopen
            self::NoResponse => [self::Contacted, self::Cancelled],
        };
    }
}
