<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageOptimizationService
{
    protected ImageManager $manager;

    protected array $variants = [
        'thumb'  => 400,
        'medium' => 800,
        'large'  => 1200,
    ];

    protected int $quality = 80;

    public function __construct()
    {
        $this->manager = new ImageManager(new Driver());
    }

    /**
     * Process an uploaded image: extract metadata and generate WebP variants.
     *
     * @return array{width: int, height: int, format: string, size_bytes: int, variants: array}
     */
    public function processUpload(string $storagePath): array
    {
        $disk = Storage::disk('public');
        $fullPath = $disk->path($storagePath);

        $image = $this->manager->read($fullPath);
        $width = $image->width();
        $height = $image->height();
        $format = strtolower(pathinfo($storagePath, PATHINFO_EXTENSION));
        $sizeBytes = $disk->size($storagePath);

        $variants = $this->generateVariants($storagePath, $image, $width);

        return [
            'width'      => $width,
            'height'     => $height,
            'format'     => $format,
            'size_bytes' => $sizeBytes,
            'variants'   => $variants,
        ];
    }

    /**
     * Generate WebP variants at predefined widths.
     */
    protected function generateVariants(string $storagePath, $image, int $originalWidth): array
    {
        $disk = Storage::disk('public');
        $directory = pathinfo($storagePath, PATHINFO_DIRNAME);
        $basename = pathinfo($storagePath, PATHINFO_FILENAME);
        $variants = [];

        foreach ($this->variants as $name => $targetWidth) {
            if ($originalWidth <= $targetWidth) {
                continue;
            }

            $variantPath = "{$directory}/{$basename}-{$name}.webp";

            $variant = clone $image;
            $variant->scaleDown(width: $targetWidth);
            $encoded = $variant->toWebp($this->quality);

            $disk->put($variantPath, (string) $encoded);

            $variants[$name] = [
                'path'   => $variantPath,
                'width'  => $variant->width(),
                'height' => $variant->height(),
                'size'   => $disk->size($variantPath),
            ];
        }

        return $variants;
    }

    /**
     * Delete variant files from storage.
     */
    public function deleteVariants(array $variants): void
    {
        $disk = Storage::disk('public');

        foreach ($variants as $variant) {
            if (isset($variant['path']) && $disk->exists($variant['path'])) {
                $disk->delete($variant['path']);
            }
        }
    }
}
