<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

/**
 *
 */
class PostController extends Controller
{
    /**
     * Получение данных с формы, обработка данных и отправка в БД
     * @param StorePostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(StorePostRequest $request)
    {
        $post = new Post();

        $input = $request->all();

        if ($file = $request->file('images')) {
            $filename = $file->getClientOriginalName();
            $file->move('images',$filename);
        }



        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->images = $request->file('images')->getClientOriginalName();

            $post->save();

        return redirect()->route('contact-data');
    }

    /**
     * Функция для вывода данных из БД на blade шаблон
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store()
    {
        return view('postsAll', ['data' => Post::all()]);
    }
}
