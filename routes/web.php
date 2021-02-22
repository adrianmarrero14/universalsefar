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

    Route::get('/documentos', 'DocumentosController@index')->name('documentos');
    Route::get('/documentos/editar/{id}', 'DocumentosController@edit');
    Route::post('/documentos/update/{id}', 'DocumentosController@update');
    Route::get('/documentos/crear', 'DocumentosController@create');
    Route::post('/documentos/store', 'DocumentosController@store');

    Route::get('/biblioteca', 'PageController@biblioteca')->name('biblioteca');

    Route::get('/arbol-clientes', 'ArbolClientesController@index')->name('arbol-clientes');

    Route::get('/arbol-familiares', 'ArbolFamiliaresController@index')->name('arbol-familiares');
    Route::get('/arbol-familiares/editar/{id}', 'ArbolFamiliaresController@edit');

    Route::get('/arbol-actualizaciones', 'ArbolActualizacionesController@index')->name('arbol-actualizaciones');

    Route::get('/casos-asignados', 'CasosAsignadosController@index')->name('casos-asignados');
    Route::get('/casos-asignados/editar', 'CasosAsignadosController@edit');    

    Route::get('/casos-finalizados', 'CasosFinalizadosController@index')->name('casos-finalizados');
    Route::get('/casos-finalizados/editar', 'CasosFinalizadosController@edit');
});

Auth::routes();
