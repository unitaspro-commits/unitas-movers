<?php

namespace App\Filament\Resources\MediaResource\Pages;

use App\Filament\Resources\MediaResource;
use App\Services\ImageOptimizationService;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedia extends EditRecord
{
    protected static string $resource = MediaResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\DeleteAction::make()];
    }

    protected function afterSave(): void
    {
        $record = $this->record;

        if (! $record->wasChanged('path') || ! $record->path) {
            return;
        }

        $service = app(ImageOptimizationService::class);

        // Delete old variants
        $oldVariants = $record->getOriginal('variants');
        if ($oldVariants) {
            $service->deleteVariants(is_string($oldVariants) ? json_decode($oldVariants, true) : $oldVariants);
        }

        // Process new upload
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
