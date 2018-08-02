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
    return view('admin.index');
});
Route::get('login', function () {
    return view('admin.login');
});
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('home','Site\SiteController@index');
Route::post('index1','Site\SiteController@index1');
Route::post('index2','Site\SiteController@index2');
Route::post('home','Site\SiteController@index');
