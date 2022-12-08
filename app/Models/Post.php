<?php

namespace App\Models;


use App\Traits\RelationsTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use RelationsTrait;

    /**
     * Получение всех должностей с врачами, отношение 1-многим (используется трейт)
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllposts()
    {
    //Использование жадной загрузки (рабочее)
    return Post::with('doctors:name')->where('post_ name','Доктор')->get();
    }
}
