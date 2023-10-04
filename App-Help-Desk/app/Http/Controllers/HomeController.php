<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastro;
class HomeController extends Controller
{
    public function index() {
        return view('app.home', ['titulo' => 'Home']);
    }

    public function validaLogin(Request $request) {

        $regras = [
            'email' => 'required|email',
            'senha' => 'required|password'
        ];

        $mensagem = [
            'email.email' => 'Já existe um usuário com este email.',
            'senha.min' => 'A senha precisa ter no mínimo 5 caracteres.',
            'senha.password' => 'Senha incorreta.',
            
            'required' => 'Os campos devem ser preenchidos corretamente'
        ];

        $request->validate($regras, $mensagem);

        return redirect()->route('site.login');
    }
}
