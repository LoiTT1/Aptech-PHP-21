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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('articles', 'ArticleController');
//https://github.com/LoiTT1/Aptech-PHP-21/tree/master/PHP/LoiTT-Aptech-21-laravel