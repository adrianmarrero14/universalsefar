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

Route::get('/documentos', 'PageController@documentos')->middleware('auth')->name('documentos');

Route::get('/biblioteca', 'PageController@biblioteca')->middleware('auth')->name('biblioteca');

Auth::routes();
