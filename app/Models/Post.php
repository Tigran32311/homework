<?php

namespace App\Models;


use App\Traits\RelationsTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Post extends Model
{
    use RelationsTrait;

    /**
     * Получение всех должностей с врачами, отношение 1-многим (используется трейт)
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllposts()
    {
        $post = Cache::remember('post',now()->addMinutes(150), function () {
            return Post::with('doctors:name')->where('post_name','Доктор')->get();
        });
        return $post;
    }
}
