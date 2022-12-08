<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Specialization;
use Illuminate\Http\Request;
use App\Models\Doctor;
use PhpParser\Comment\Doc;

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

    /**
     * Метод реализующий вывод всех докторов по специализации педиатор
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getDoctorswithSpec()
    {
        $doctors = new Doctor();
        $list = $doctors->getDoctorswithSpec();
        return view('DoctorList',['list'=>$list]);

    }
}
