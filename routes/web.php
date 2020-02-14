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

Route::get('/', 'Front\WelcomeController@index')->name('Front.index');

Route::get('Front.seasons/{id}', 'Front\FrontSeasonController@index')->name('Front.seasons');

Route::get('Front.episods/{id}', 'Front\EpisodsController@index')->name('Front.episods');

Route::get('Front.show/{id}', 'Front\ShowController@index')->name('Front.show');

Auth::routes(['verify' => true]);



Route::group(['middleware' => 'administrator'], function () {
    Route::get('/home', 'HomeController@index')->middleware('verified');
    Route::resource('users', 'UserController');
    Route::resource('serials', 'SerialController');
    Route::resource('seasons', 'SeasonController');
    Route::resource('seriyas', 'SeriyaController');
    
    Route::resource('roles', 'RoleController');
});













