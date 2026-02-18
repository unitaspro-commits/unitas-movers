<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::published()
            ->latest('published_at')
            ->paginate(12);

        return view('blog.index', compact('posts'));
    }

    public function show(BlogPost $post)
    {
        abort_unless($post->is_published, 404);

        $post->load('relatedService', 'relatedArea');
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->where('category', $post->category)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
