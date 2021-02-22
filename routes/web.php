<?php

use GuzzleHttp\Middleware;
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


Route::redirect('/home', '/');

Route::middleware('auth')->group( function (){

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('/documentos', 'DocumentosController');

    Route::get('/biblioteca', 'PageController@biblioteca')->name('biblioteca');

    Route::resource('arbol-clientes', 'ArbolClientesController')->except('show');

    Route::get('arbol-familiares', 'ArbolFamiliaresController@index')->name('arbol-familiares');
    Route::get('arbol-familiares/editar/{id}', 'ArbolFamiliaresController@edit');

    Route::get('/arbol-actualizaciones', 'ArbolActualizacionesController@index')->name('arbolactualizaciones');
});

Auth::routes();
