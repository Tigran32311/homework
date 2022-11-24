<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->text = $request->input('text');

        $post->save();

        return redirect()->route('contact-data');
    }

    public function store()
    {
        return view('postsAll',['data'=>Post::all()]);
    }
}
