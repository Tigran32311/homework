<?php

use Illuminate\Support\Facades\Route;
use App\Models\Doctor;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



 /* Route::get('/', function () {
    $doctor = new Doctor();
    var_dump($doctor->getDoctorsList()->toArray());
    return view('welcome');
});*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/doctors/all',[\App\Http\Controllers\DoctorController::class,'getDoctors']);

Route::get('/doctors/getExp',[\App\Http\Controllers\DoctorController::class,'getDoctorsExp']);

Route::get('/doctors/getSpec',[\App\Http\Controllers\DoctorController::class,'getDoctorswithSpec']);

Route::get('/doctors/getPost',[\App\Http\Controllers\DoctorController::class,'getDoctorsPost']);

Route::get('/doctors/getAllPost',[\App\Http\Controllers\PostController::class,'getPosts']);
