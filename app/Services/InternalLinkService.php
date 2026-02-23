<?php

namespace App\Services;

use App\Models\Area;
use App\Models\BlogPost;
use App\Models\Service;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class InternalLinkService
{
    /**
     * Get related pages for a service detail page.
     */
    public function forService(Service $service): array
    {
        return Cache::remember("internal_links:service:{$service->id}", 3600, function () use ($service) {
            return [
                'services' => $this->relatedServices($service),
                'areas' => $this->randomAreas(6),
                'blog_posts' => $this->blogPostsForService($service),
            ];
        });
    }

    /**
     * Get related pages for an area detail page.
     */
    public function forArea(Area $area): array
    {
        return Cache::remember("internal_links:area:{$area->id}", 3600, function () use ($area) {
            return [
                'services' => Service::published()->ordered()->take(6)->get(),
                'areas' => $this->siblingAreas($area),
                'blog_posts' => $this->blogPostsForArea($area),
            ];
        });
    }

    /**
     * Get related pages for a route detail page.
     */
    public function forRoute(\App\Models\Route $route): array
    {
        return Cache::remember("internal_links:route:{$route->id}", 3600, function () {
            return [
                'services' => Service::published()
                    ->whereIn('slug', ['long-distance-moving', 'packing-services', 'storage-solutions'])
                    ->ordered()
                    ->get(),
                'areas' => $this->randomAreas(4),
                'blog_posts' => BlogPost::published()
                    ->where('category', 'guides')
                    ->latest('published_at')
                    ->take(3)
                    ->get(),
            ];
        });
    }

    /**
     * Get related pages for a blog post detail page.
     */
    public function forBlogPost(BlogPost $post): array
    {
        return Cache::remember("internal_links:blog:{$post->id}", 3600, function () use ($post) {
            return [
                'services' => $this->servicesForBlogPost($post),
                'areas' => $this->areasForBlogPost($post),
                'blog_posts' => collect(),
            ];
        });
    }

    private function relatedServices(Service $service): Collection
    {
        return Service::published()
            ->where('id', '!=', $service->id)
            ->orderByRaw('ABS(sort_order - ?) ASC', [$service->sort_order])
            ->take(4)
            ->get();
    }

    private function randomAreas(int $count): Collection
    {
        return Area::published()->inRandomOrder()->take($count)->get();
    }

    private function siblingAreas(Area $area): Collection
    {
        if (! $area->parent_id) {
            return Area::published()
                ->whereNull('parent_id')
                ->where('id', '!=', $area->id)
                ->inRandomOrder()
                ->take(6)
                ->get();
        }

        return Area::published()
            ->where('parent_id', $area->parent_id)
            ->where('id', '!=', $area->id)
            ->inRandomOrder()
            ->take(6)
            ->get();
    }

    private function blogPostsForService(Service $service): Collection
    {
        return BlogPost::published()
            ->where('related_service_id', $service->id)
            ->latest('published_at')
            ->take(3)
            ->get();
    }

    private function blogPostsForArea(Area $area): Collection
    {
        return BlogPost::published()
            ->where('related_area_id', $area->id)
            ->latest('published_at')
            ->take(3)
            ->get();
    }

    private function servicesForBlogPost(BlogPost $post): Collection
    {
        $services = collect();

        if ($post->related_service_id) {
            $related = $post->relatedService;
            if ($related && $related->is_published) {
                $services->push($related);
            }
        }

        $more = Service::published()
            ->when($post->related_service_id, fn ($q) => $q->where('id', '!=', $post->related_service_id))
            ->inRandomOrder()
            ->take(2)
            ->get();

        return $services->concat($more);
    }

    private function areasForBlogPost(BlogPost $post): Collection
    {
        $areas = collect();

        if ($post->related_area_id) {
            $related = $post->relatedArea;
            if ($related && $related->is_published) {
                $areas->push($related);
            }
        }

        $more = Area::published()
            ->when($post->related_area_id, fn ($q) => $q->where('id', '!=', $post->related_area_id))
            ->inRandomOrder()
            ->take(2)
            ->get();

        return $areas->concat($more);
    }
}
