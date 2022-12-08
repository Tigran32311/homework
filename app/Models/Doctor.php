<?php

namespace App\Models;

use App\Traits\RelationsTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;


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

        $doctor = Cache::remember('doctors',now()->addMinutes(150),function (){
            $doc = DB::table('doctors')
                ->join('posts','posts.id','=','doctors.post_id')
                ->join('specializations','specializations.id','=','doctors.specialization_id')
                ->select('doctors.name','doctors.surname','doctors.expirience','posts.post_name','posts.salary','specializations.specialization_name')
                ->get();
            return $doc;
        });

        return $doctor;
    }

    /**
     * Запрос на получение всех докторов педиаторов
     * @return mixed
     */
    public function getDoctorswithSpec()
    {
        $doctor = Cache::remember('spec',now()->addMinutes(150), function () {
            $doctors = DB::table('doctors')
                ->join('specializations','specializations.specialization_name','=','Педиатор')
                ->select('doctors.name','doctors.surname','doctors.expirience','specializations.specialization_name')
                ->get();
            return $doctors;
        });
        return $doctor;
    }


}
