<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * Метод реализующий вывод всех данных из таблицы "Доктор"
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getDoctors()
    {
        $doctors = new Doctor();

        $list = $doctors->getDoctorsList();
        return view('DoctorList',['list'=>$list]);
    }

    /**
     * Метод реализующий вывод всех докторов у которых опыт работы больше 5 лет
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getDoctorsExp()
    {
        $doctors = new Doctor();

        $list = $doctors->getDoctorsExp();
        return view('DoctorList',['list'=>$list]);
    }
}
