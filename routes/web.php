<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->middleware('auth')->name('home');

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::resource('documentos', 'DocumentosController')->middleware('auth');

Route::get('/biblioteca', 'PageController@biblioteca')->middleware('auth')->name('biblioteca');

Route::get('/arbol-clientes', 'ArbolclientesController@index')->middleware('auth')->name('arbolclientes');

Route::get('/arbol-familiares', 'ArbolfamiliaresController@index')->middleware('auth')->name('arbolfamiliares');

Route::get('/arbol-actualizaciones', 'ArbolactualizacionesController@index')->middleware('auth')->name('arbolactualizaciones');

Auth::routes();
