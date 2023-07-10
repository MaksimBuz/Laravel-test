<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admine', 'APIController@index')->name('admine');
    Route::get('/api/v1/create', 'APIController@create')->name('api.create');
    Route::get('/api/v1/{id}/edit', 'APIController@edit')->name('api.edit');
    Route::patch('/api/v1/{id}', 'APIController@update')->name('api.update');
    Route::get('/api/v1/store', 'APIController@store')->name('api.store');

    Route::get('/api/v1/show', 'APIController@show')->name('api.show');

    Route::get('/api/v1/element/show/{id}', 'APIController@elementShow')->name('api.elementShow');

    Route::get('/api/v1/element/create', 'APIController@elementCreate')->name('api.elementCreate');
    Route::get('/api/v1/element/store', 'APIController@elementStore')->name('api.elementStore');
    Route::delete('/api/v1/element/{id}', 'APIController@elementDestroy')->name('api.elementDestroy');
});

route::group(['middleware' => ['auth','ViewCount']], function () {
    Route::get('/', 'IndexController')->name('main.index');
});


Auth::routes();
