<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;

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


//Маршрут обрабатывающий запрос на отправку формы. Используется посредник для проверки пустая ли строка
Route::post('form/Send',[FormController::class, 'Send'])->middleware('check');

//Простой GET запрос
/*Route::get('/welcome', function () {
    return 'Hello world';
});*/

//Маршрут ссылающий на первый маршрут
Route::redirect('/welcome2','/welcome')->middleware('get');

//Перенос логики первого GET запроса в контроллер. Также выводит URL введеной страницы
Route::get('/welcome',[HomeController::class, 'get_request'])->middleware('get');

//Третий маршрут принимающий параметр
Route::get('/welcome3/{name}', function (string $name) {
    return 'Имя: '.$name;
})->middleware('get');

//Четвертый маршрут, при вызове которого посредник перенаправит запрос на третий маршрут
Route::get('/welcome4', function () {

})->middleware('get');
