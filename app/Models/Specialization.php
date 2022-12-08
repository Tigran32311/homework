<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use RelationsTrait;

    /**
     * Получение всех специализаций с врачами (только свойство 'name'), отношение 1-многим (используется трейт)
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllSpec()
    {
        //Использование жадной загрузки (рабочее)
        return Specialization::with('doctors:name')->get();
    }
}
