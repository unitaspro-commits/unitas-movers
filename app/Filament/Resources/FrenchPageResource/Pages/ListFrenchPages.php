<?php

namespace App\Filament\Resources\FrenchPageResource\Pages;

use App\Filament\Resources\FrenchPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFrenchPages extends ListRecords
{
    protected static string $resource = FrenchPageResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\CreateAction::make()];
    }
}
