<?php

namespace App\Models;

use App\Traits\RelationsTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Doctor extends Model
{
    //Подключение трейта
    use RelationsTrait;

    /**
     * Запрос на получение всех докторов
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getDoctorsList()
    {
        //было Doctor::all()

        //использование жадной загрузки (нерабочее). связь 'posts' наследуется от трейта 'RelationsTrait'
        $doc =  Doctor::with('posts:post_name')->get();


        //Использование JOIN
        $doc = DB::table('doctors')
            ->join('posts','posts.id','=','doctors.post_id')
            ->join('specializations','specializations.id','=','doctors.specialization_id')
            ->select('doctors.name','doctors.surname','doctors.expirience','posts.post_name','posts.salary','specializations.specialization_name')
            ->get();

        return $doc;
    }

    /**
     * Запрос на получение всех докторов педиаторов
     * @return mixed
     */
    public function getDoctorswithSpec()
    {
        //Использование JOIN
        $doctors = DB::table('doctors')
            ->join('specializations','specializations.specialization_name','=','Педиатор')
            ->select('doctors.name','doctors.surname','doctors.expirience','specializations.specialization_name')
            ->get();
        return $doctors;
    }
}
