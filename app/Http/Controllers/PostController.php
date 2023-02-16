<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        $post->save();

        // Session::flash('alert-danger', 'danger');
        // Session::flash('alert-warning', 'warning');
        // Session::flash('alert-info', 'info');
        Session::flash('alert-success', 'success');

        return redirect(route('homepage'));

    }
}
