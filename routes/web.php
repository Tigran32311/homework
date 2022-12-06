<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/doctors/all',[\App\Http\Controllers\DoctorController::class,'getDoctors']);

Route::get('/doctors/getExp',[\App\Http\Controllers\DoctorController::class,'getDoctorsExp']);

