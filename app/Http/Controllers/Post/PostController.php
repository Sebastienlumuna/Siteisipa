<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    //
   public function postview(): View
   {
        return view('post.index');
    }
}
