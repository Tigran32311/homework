<?php

use Illuminate\Support\Facades\Route;
use App\Models\Doctor;
use Illuminate\Support\Facades\Redis;

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

//Просто вывод кэша в json
Route::get('/publish', function () {
    return \Illuminate\Support\Facades\Cache::get('doctors');
});
//Просто вывод кэша в json
Route::get('/publish2', function () {
    return \Illuminate\Support\Facades\Cache::get('post');
});
//Просто вывод кэша в json
Route::get('/publish3', function () {
    return \Illuminate\Support\Facades\Cache::get('specialization');
});

Route::get('/doctors/all',[\App\Http\Controllers\DoctorController::class,'getDoctors']);

Route::get('/doctors/getSpec',[\App\Http\Controllers\DoctorController::class,'getDoctorswithSpec']);

Route::get('/doctors/getPost',[\App\Http\Controllers\PostController::class,'getPosts']);
