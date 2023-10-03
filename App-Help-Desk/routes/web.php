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

Route::get('/', 'LoginController@index')->name('site.login');
Route::post('/', 'LoginController@login')->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/abrir-chamado', 'AbreChamadoController@index')->name('app.abrir_chamado');
    Route::get('/consultar-chamado', 'ConsultaChamadoController@index')->name('app.consultar_chamado');
});

