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
Route::get('/', 'PagesController@home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('/', 'AdminController@home');
    Route::get('users', 'UserController@index');
    Route::get('users/create', 'UserController@create');
    Route::post('users/create', 'UserController@store');
    Route::get('users/{id}/edit', 'UserController@edit');
    Route::post('users/{id}/edit', 'UserController@update')->name('users.edit');
    Route::delete('users/{id}', 'UserController@destroy');

    Route::get('salons', 'SalonController@index')->name('salons.index');
    Route::get('salons/create', 'SalonController@create');
    Route::post('salons/create', 'SalonController@store');
    Route::get('salons/{id}/edit', 'SalonController@edit');
    Route::post('salons/{id}/edit', 'SalonController@update');
    Route::delete('salons/{id}', 'SalonController@destroy');

    Route::get('services', 'ServiceController@index')->name('services.index');
    Route::get('services/create', 'ServiceController@create');
    Route::post('services/create', 'ServiceController@store');
    Route::get('services/{id}/edit', 'ServiceController@edit');
    Route::post('services/{id}/edit', 'ServiceController@update');
    Route::delete('services/{id}', 'ServiceController@destroy');

    Route::get('renderbookings', 'RenderBookingController@index')->name('renderbookings.index');
    Route::get('renderbookings/create', 'RenderBookingController@create');
    Route::post('renderbookings/create', 'RenderBookingController@store');
    Route::get('renderbookings/{id}/edit', 'RenderBookingController@edit');
    Route::post('renderbookings/{id}/edit', 'RenderBookingController@update');
    Route::delete('renderbookings/{id}', 'RenderBookingController@destroy');
});
Route::get('booking', 'Site\SiteController@createBooking');
Route::get('bookings','Site\SiteController@storeBooking')->name('bookings');
