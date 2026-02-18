<?php

namespace App\Filament\Resources\MediaResource\Pages;

use App\Filament\Resources\MediaResource;
use App\Services\ImageOptimizationService;
use Filament\Resources\Pages\CreateRecord;

class CreateMedia extends CreateRecord
{
    protected static string $resource = MediaResource::class;

    protected function afterCreate(): void
    {
        $record = $this->record;

        if (! $record->path) {
            return;
        }

        $service = app(ImageOptimizationService::class);
        $result = $service->processUpload($record->path);

        $record->update([
            'width'      => $result['width'],
            'height'     => $result['height'],
            'format'     => $result['format'],
            'size_bytes' => $result['size_bytes'],
            'variants'   => $result['variants'],
        ]);
    }
}
