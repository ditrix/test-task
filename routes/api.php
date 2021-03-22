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



Route::get('/ankets/','API\AnketaController@index')->name('ankets.index');

// действия "владельца" анкеты
Route::get('/ankets/{user}','API\AnketaController@user')->name('ankets.user');  // список анкет пользователя

Route::get('/ankets/create','API\AnketaController@create')->name('ankets.create'); // добавить анкету
Route::get('/ankets/edit/{anketa}','API\AnketaController@edit')->name('ankets.edit'); // добавить анкету
Route::post('/orders/store','API\AnketaController@store'); // сохранить анкету

Route::put('/ankets/{anketa}','API\AnketaController@update')->name('ankets.update'); // обновить анкету
Route::delete('/ankets/{anketa}','API\AnketaController@destroy')->name('ankets.destroy');  // удалить анкету пользователя



// заказы
Route::get('/orders/','API\OrderController@index')->name('orders.index');
Route::get('/orders/user/{user}','API\OrderController@user')->name('orders.user'); // список всех заказов по пользователю
Route::get('/orders/ankets/{anketa}','API\OrderController@anketa')->name('orders.ankets'); // список заказов по анкете
Route::get('/orders/create','API\AnketaController@store')->name('orders.create'); // добавить заказ
Route::post('/orders/store','API\AnketaController@store')->name('orders.store'); // сохранить заказ

