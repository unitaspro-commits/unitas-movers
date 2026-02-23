<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Services\InternalLinkService;
use App\Services\SchemaMarkupService;

class BlogController extends Controller
{
    public function index(SchemaMarkupService $schema)
    {
        $posts = BlogPost::published()
            ->latest('published_at')
            ->paginate(12);

        $schemas = $schema->forIndexPage('Blog', route('blog.index'), 'blog-index');

        return view('blog.index', compact('posts', 'schemas'));
    }

    public function show(BlogPost $post, SchemaMarkupService $schema, InternalLinkService $links)
    {
        abort_unless($post->is_published, 404);

        $post->load('relatedService', 'relatedArea');
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->where('category', $post->category)
            ->latest('published_at')
            ->take(3)
            ->get();

        $schemas = $schema->forBlogShow($post);
        $relatedPages = $links->forBlogPost($post);

        return view('blog.show', compact('post', 'relatedPosts', 'schemas', 'relatedPages'));
    }
}
