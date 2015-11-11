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

// Login routes...
Route::get('auth/login', 'LoginController@loginIndex');
Route::post('auth/login', 'LoginController@loginProcess');

// Logout route...
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['prefix' => 'booking'], function () {
    Route::get('/', 'BookingController@index');
    Route::post('/addReservation', 'BookingController@addReservation');
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/', 'AdminController@index');
            Route::get('/newApartment', 'AdminController@newApartment');
            Route::post('/createApartment', 'AdminController@createApartment');
            Route::post('/destroyApartment', 'AdminController@destroyApartment');
        });
    });
});