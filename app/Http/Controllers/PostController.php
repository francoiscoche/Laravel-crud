<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    // return all articles
    public function index()
    {
        $posts = Post::all();

        return view('homepage', [
            'posts' => $posts
        ]);
    }

    public function article($id) {

        $post = Post::findOrFail($id);

        return view('article', [
            'post' => $post
        ]);
    }
}
