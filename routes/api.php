<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/anket/','API\AnketaController@index')->name('ankets.index');
// действия "владельца" анкеты
Route::get('/anket/{user}/list','API\AnketaController@user')->name('ankets.user');  // список анкет пользователя
Route::get('/anket/{anketa}/edit','API\AnketaController@edit')->name('ankets.edit'); // редактировать анкету
Route::post('/anket','API\AnketaController@store'); // добавить анкету
Route::put('/anket/{anketa}','API\AnketaController@update')->name('ankets.update'); // обновить анкету
Route::delete('/anket/{anketa}','API\AnketaController@destroy')->name('ankets.destroy');  // удалить анкету пользователя



// заказы
Route::get('/order/','API\OrderController@index')->name('orders.index');
Route::get('/order/{user}/user','API\OrderController@user')->name('orders.user'); // список всех заказов по пользователю
Route::get('/order/{anketa}/anket','API\OrderController@anketa')->name('orders.ankets'); // список заказов по анкете
Route::get('/order/create','API\OrderController@store')->name('orders.create'); // добавить заказ
Route::post('/order/store','API\OrderController@store')->name('orders.store'); // сохранить заказ

