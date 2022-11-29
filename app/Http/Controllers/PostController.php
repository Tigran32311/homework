<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function create(StorePostRequest $request)
    {
        $post = new Post();

        $input = $request->all();

        if ($file = $request->file('images')) {
            $filename = $file->getClientOriginalName();
            $file->move('images',$filename);
        }


//        $file->move(public_path().$destinationPath,$filename);

        $post->title = $request->input('title');
        $post->text = $request->input('text');
//        $post->images = $request->input('images');
        $post->images = $request->file('images')->getClientOriginalName();

            $post->save();

        return redirect()->route('contact-data');
    }

    public function store()
    {
        return view('postsAll', ['data' => Post::all()]);
    }
}
