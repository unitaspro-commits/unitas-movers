<?php

namespace App\Console\Commands;

use App\Models\InternalLink;
use App\Services\InternalLinkService;
use App\Models\Area;
use App\Models\BlogPost;
use App\Models\Service;
use Illuminate\Console\Command;

class GenerateInternalLinks extends Command
{
    protected $signature = 'links:generate';

    protected $description = 'Populate internal_links table for SEO audit purposes';

    public function handle(InternalLinkService $linkService): int
    {
        InternalLink::truncate();

        $count = 0;

        $this->info('Processing services...');
        foreach (Service::published()->get() as $service) {
            $related = $linkService->forService($service);
            $count += $this->insertLinks('service', $service->id, $related);
        }

        $this->info('Processing areas...');
        foreach (Area::published()->get() as $area) {
            $related = $linkService->forArea($area);
            $count += $this->insertLinks('area', $area->id, $related);
        }

        $this->info('Processing blog posts...');
        foreach (BlogPost::published()->get() as $post) {
            $related = $linkService->forBlogPost($post);
            $count += $this->insertLinks('blog_post', $post->id, $related);
        }

        $this->info("Done! {$count} internal links generated.");

        return self::SUCCESS;
    }

    private function insertLinks(string $sourceType, int $sourceId, array $groups): int
    {
        $count = 0;

        foreach ($groups as $items) {
            foreach ($items as $item) {
                $url = match (true) {
                    $item instanceof Service => route('services.show', $item),
                    $item instanceof Area => route('areas.show', $item),
                    $item instanceof BlogPost => route('blog.show', $item),
                    default => null,
                };

                if (! $url) {
                    continue;
                }

                $anchor = $item->name ?? $item->title;

                InternalLink::create([
                    'source_page_type' => $sourceType,
                    'source_page_id' => $sourceId,
                    'target_url' => $url,
                    'anchor_text' => $anchor,
                ]);

                $count++;
            }
        }

        return $count;
    }
}
