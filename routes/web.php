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

Route::get('master', function () {
    return view('layouts.master');
});

Route::get('custom-register','CustomAuthController@showRegisterForm')->name('custom.register');
Route::post('custom-register','CustomAuthController@register');


Route::get('custom-login','CustomAuthController@showLoginForm')->name('custom.login');
Route::post('custom-login','CustomAuthController@login');


Route::get('dashboard','UserController@index')->name('dashboard');
Route::get('student-list','UserController@studentview')->name('student-list');





























//
//Route::get('login', function () {
//    return view('admin.login');
//});
//
//Route::get('register', function () {
//    return view('admin.register');
//});
//Route::get('/register','RegisterController@create');
//Route::post('/register','RegisterController@store')->name('store');
//
//Route::get('/login','RegisterController@create')->name('login');
////Route::post('/login','RegisterController@store')->name('store');
