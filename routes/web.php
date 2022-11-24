<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckUnique;

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

Route::get('form', function (Request $request) {
    $token = $request->session()->token();
    $token = csrf_token();
    return view('form');
});
Route::post('/form/send',[PostController::class,'create'])->middleware('checkUnique');

Route::get('/posts/all',[PostController::class,'store'])->name('contact-data');
