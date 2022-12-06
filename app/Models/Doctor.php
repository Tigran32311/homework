<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /**
     * Запрос на получение всех докторов
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getDoctorsList()
    {
        return $doctors = Doctor::all();
    }

    /**
     * Запрос на получение всех докторов ,у которых опыт работы больше 5 лет
     * @return mixed
     */
    public function getDoctorsExp()
    {
        return $doctors = Doctor::where('Expirience', '>', 5)
            ->orderBy('Surname')
            ->get();
    }
}
