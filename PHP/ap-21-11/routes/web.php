<?php

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

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create');
//xem chi tiet nguoi dung
Route::get('/users/{id}', 'UserController@Show');
Route::post('/users', 'UserController@store');
Route::delete('/users/{id}', 'UserController@destroy');
Route::get('/users/{id}/edit', 'UserController@edit');
route::put('/users/{id}', 'UserController@update')->name('users.update');
// Route::resource('users', 'UserController');