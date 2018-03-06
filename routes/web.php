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

//HOME

Route::resource('/','HomeController');
Route::name('homepage')->get('/','HomeController@index');

//PROFILE

Route::resource('profil', 'ProfileController');
Route::name('profilepage')->get('profil', 'ProfileController@index');

//SETTINGS

Route::resource('parametres','SettingsController');
Route::name('settingspage')->get('parametres','SettingsController@index');

//AUTH

Auth::routes();

Route::get('/home', 'HomeController@ifAuth')->name('home');
