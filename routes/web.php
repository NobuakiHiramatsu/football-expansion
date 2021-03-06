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

/* ユーザー登録のルーター　*/
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

/* ログイン・ログアウトのルーター　*/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => ['auth']], function () {
    Route::get('users', 'UsersController@index')->name('myprofile');

    Route::resource('favorites', 'FavoritesController',['only'=> ['index','store', 'destroy']]);
});