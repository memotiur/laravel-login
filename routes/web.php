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

Route::get('/', 'LoginController@login');


Route::get('/login', 'LoginController@login');
Route::post('/login/check', 'LoginController@loginCheck')->name('loginCheck');


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', 'DashboardController@dashboard');


});

Route::group(['middleware' => 'admin'], function () {

    Route::get('/logout', 'DashboardController@logout');

});
Route::get('/dashboard/profile', 'DashboardController@admin_profile');
Route::post('/dashboard/profileUpdate', 'DashboardController@profileUpdate');


