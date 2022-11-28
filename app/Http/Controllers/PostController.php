<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(StorePostRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->text = $request->input('text');

        $post->save();

        return redirect()->route('contact-data');
    }

    public function store()
    {
        return view('postsAll', ['data' => Post::all()]);
    }
}
