<?php

namespace App\Enums;

enum MoveSize: string
{
    case Home = 'home';
    case Studio = 'studio';
    case OneBedroom = '1br';
    case TwoBedroom = '2br';
    case ThreeBedroom = '3br';
    case FourBedroomPlus = '4br_plus';
    case Office = 'office';

    public function label(): string
    {
        return match ($this) {
            self::Home => 'Home',
            self::Studio => 'Studio',
            self::OneBedroom => '1 Bedroom',
            self::TwoBedroom => '2 Bedrooms',
            self::ThreeBedroom => '3 Bedrooms',
            self::FourBedroomPlus => '4+ Bedrooms',
            self::Office => 'Office',
        };
    }
}
