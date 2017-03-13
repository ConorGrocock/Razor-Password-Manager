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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/google'          , 'Auth\LoginController@GoogleredirectToProvider');
Route::get('register/google'       , 'Auth\RegisterController@GoogleredirectToProvider');
Route::get('login/google/callback' , 'Auth\LoginController@GooglehandleProviderCallback');

Route::group(['middleware' => 'auth'], function () {

  //Group Routes

  Route::get( '/group/show/{id}'       , 'GroupController@show');
  Route::get( '/group/show/{id}/join'  , 'GroupController@join');
  Route::get( '/group/show/{id}/edit'  , 'GroupController@edit');
  Route::post('/group/show/{id}/edit'  , 'GroupController@update');
  Route::get( '/group/show/{id}/delete', 'GroupController@destroy');

  Route::get('/group/list', 'GroupController@index');
  Route::get('/group/new', 'GroupController@create');
  Route::post('/group/new', 'GroupController@store');

  //Password Routes

  Route::get('/password/list', 'PasswordController@index');
  Route::get('/password/new', 'PasswordController@create');
  Route::post('/password/new', 'PasswordController@store');
});
