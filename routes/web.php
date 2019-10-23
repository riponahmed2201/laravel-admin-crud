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
//
//Route::get('login', function () {
//    return view('admin.login');
//});
//
//Route::get('register', function () {
//    return view('admin.register');
//});
Route::get('/register','RegisterController@create');
Route::post('/register','RegisterController@store')->name('store');

Route::get('/login','RegisterController@create')->name('login');
//Route::post('/login','RegisterController@store')->name('store');
