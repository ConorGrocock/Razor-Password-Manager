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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/google'          , 'Auth\LoginController@GoogleredirectToProvider');
Route::get('register/google'       , 'Auth\RegisterController@GoogleredirectToProvider');
Route::get('login/google/callback' , 'Auth\LoginController@GooglehandleProviderCallback');


Route::get('/password/new', 'PasswordController@create');
Route::get('/password/list', 'PasswordController@index');

Route::get('/group/new', 'GroupController@create');
Route::post('/group/new', 'GroupController@store');

Route::get('/password/new', 'PasswordController@create');
Route::post('/password/new', 'PasswordController@store');
