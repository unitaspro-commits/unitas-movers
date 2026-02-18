<?php

namespace App\Enums;

enum ReferralSource: string
{
    case Google = 'google';
    case Referral = 'referral';
    case Social = 'social';
    case HomeStar = 'homestar';
    case Kijiji = 'kijiji';
    case Other = 'other';

    public function label(): string
    {
        return match ($this) {
            self::Google => 'Google Search',
            self::Referral => 'Friend / Referral',
            self::Social => 'Social Media',
            self::HomeStar => 'HomeStars',
            self::Kijiji => 'Kijiji',
            self::Other => 'Other',
        };
    }
}
