<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderby('created_at', 'desc')->get();
        \Debugbar::info($posts);
        return view('index', ['posts' => $posts]);
    }

    public function create(Request $request) {
        \Debugbar::info($request);
        $post = new Post();
        $post->comment = $request->comment;
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect('/');
    }
}
