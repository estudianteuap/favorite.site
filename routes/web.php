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

Route::resource('/Album', 'AlbumController')->names('Album')
->middleware('auth');
Route::resource('/Foto', 'FotosController')->names('Fotos');
Route::resource('/Perfil', 'UserController');
Route::get('Perfil/{id}', 'UserController@show');

Route::resource('/Test', 'TestController');
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::resource('/Role', 'RoleController')->names('Role');
