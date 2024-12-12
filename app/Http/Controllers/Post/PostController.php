<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

class PostController extends Controller
{
    //
   public function postview(): View
   {
    $posts = Post::latest()->paginate(9); // Récupère les derniers posts
    return view('post.index', compact('posts'));
    }

    public function show(Post $post): View
    {
        return view('post.show', [
            'post' => $post,
        ]);
    }
}
