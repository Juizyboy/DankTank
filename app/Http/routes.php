<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@index');

Route::group(['prefix' => 'booking'], function () {
    Route::get('/', 'BookingController@index');
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'AdminController@index');
        Route::get('/newApartment', 'AdminController@newApartment');
        Route::post('/createApartment', 'AdminController@createApartment');
        Route::post('/destroyApartment', 'AdminController@destroyApartment');

    });
});