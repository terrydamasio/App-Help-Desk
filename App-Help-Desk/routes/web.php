<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;

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

Route::get('/cadastro', 'CadastroController@cadastro')->name('site.cadastro');
Route::post('/cadastro', 'CadastroController@cadastrar')->name('site.cadastro');

Route::middleware('log.acesso', 'autenticacao:padrao, perfil')->prefix('/app')->group(function () {
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::post('/home', 'HomeController@validaLogin')->name('app.home');

    Route::get('/abrir-chamado', 'AbreChamadoController@index')->name('app.abrir_chamado');
    Route::get('/consultar-chamado', 'ConsultaChamadoController@index')->name('app.consultar_chamado');
});

