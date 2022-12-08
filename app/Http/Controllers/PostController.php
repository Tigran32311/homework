<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Specialization;
use Illuminate\Http\Request;
use App\Models\Doctor;
use PhpParser\Comment\Doc;

class PostController extends Controller
{
    /**
     * Метод реализующий вывод всех данных из таблицы "Доктор" с помощью жадной загрузки (используется трейт 'RelationsTrait')
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getPosts()
    {
        $post = new Post();
        $doctors = new Doctor();
        $list = $post->getAllposts();
        $list2 = $doctors->getDoctorsList();
        return view('DoctorList',['list'=>$list,'list2'=>$list2] );
    }

}

