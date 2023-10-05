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

Route::get('/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/', 'LoginController@autenticar')->name('site.login');

Route::get('/cadastro2', 'CadastroController@cadastro')->name('site.cadastro');
Route::post('/cadastro', 'CadastroController@cadastrar')->name('site.cadastrar');

Route::middleware('autenticacao:padrao, perfil')->prefix('/app')->group(function () {
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');

    Route::get('/abrir-chamado', 'AbreChamadoController@index')->name('app.abrir_chamado');

    Route::get('/consultar-chamado', 'ConsultaChamadoController@index')->name('app.consultar_chamado');
});

