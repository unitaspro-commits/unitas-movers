<?php

namespace App\Console\Commands;

use App\Models\Media;
use App\Services\ImageOptimizationService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RegenerateImageVariants extends Command
{
    protected $signature = 'images:regenerate';

    protected $description = 'Regenerate WebP variants for all media records';

    public function handle(ImageOptimizationService $service): int
    {
        $media = Media::all();
        $disk = Storage::disk('public');

        if ($media->isEmpty()) {
            $this->info('No media records found.');

            return self::SUCCESS;
        }

        $this->info("Processing {$media->count()} media records...");
        $bar = $this->output->createProgressBar($media->count());

        $processed = 0;
        $skipped = 0;

        foreach ($media as $item) {
            $bar->advance();

            if (! $disk->exists($item->path)) {
                $this->newLine();
                $this->warn("  Skipped: {$item->path} (file not found)");
                $skipped++;

                continue;
            }

            // Delete existing variants
            if ($item->variants) {
                $service->deleteVariants($item->variants);
            }

            try {
                $result = $service->processUpload($item->path);

                $item->update([
                    'width'      => $result['width'],
                    'height'     => $result['height'],
                    'format'     => $result['format'],
                    'size_bytes' => $result['size_bytes'],
                    'variants'   => $result['variants'],
                ]);

                $processed++;
            } catch (\Exception $e) {
                $this->newLine();
                $this->error("  Failed: {$item->path} — {$e->getMessage()}");
                $skipped++;
            }
        }

        $bar->finish();
        $this->newLine(2);
        $this->info("Done! Processed: {$processed}, Skipped: {$skipped}");

        return self::SUCCESS;
    }
}
