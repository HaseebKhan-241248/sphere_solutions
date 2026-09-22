<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): View|RedirectResponse
    {
        // Collapse /blog?page=1 onto /blog to avoid duplicate content.
        if ($request->query('page') === '1') {
            $query = $request->except('page');

            return redirect()->to(
                empty($query) ? route('blog.index') : route('blog.index', $query),
                301
            );
        }

        $posts = BlogPost::query()
            ->published()
            ->with(['categories', 'tags'])
            ->latest('published_at')
            ->paginate(9)
            ->withQueryString();

        return view('pages.blog.index', [
            'posts' => $posts,
        ]);
    }

    public function show(string $slug): View
    {
        $post = BlogPost::query()
            ->published()
            ->with(['categories', 'tags'])
            ->where('slug', $slug)
            ->firstOrFail();

        $related = BlogPost::query()
            ->published()
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('pages.blog.show', [
            'post' => $post,
            'related' => $related,
        ]);
    }
}
