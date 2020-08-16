<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PageController extends Controller
{
    public function posts()
    {
        $post = Post::with('users')
                ->latest()
                ->paginate();
        return view('post', compact('post'));
    }

    public function post(Post $post)
    {
        return view('post',compact('post'));
    }
}
