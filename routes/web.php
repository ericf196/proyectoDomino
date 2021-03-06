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

Route::get('/', 'indexController@index');

Route::get('/estado', 'estadoController@index');

Route::get('/liga', 'ligaController@index');

Route::get('/panel', 'indexPanelController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
