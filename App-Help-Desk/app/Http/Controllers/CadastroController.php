<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastro;

class CadastroController extends Controller
{
    public function cadastro(Request $request) {
        return view('site.cadastro', ['titulo' => 'Cadastro']); 
    }

    public function cadastrar(Request $request) {

        $regras = [
            'nome' => 'required|min:3',
            'email' => 'required|email|unique:usuarios',
            'senha' => 'required|min:5'
        ];

        $mensagem = [
            'nome.min' => 'O nome precisa ter no mínimo 3 caracteres.',
            'email.unique' => 'Já existe um usuário com este email.',
            'senha.min' => 'A senha precisa ter no mínimo 5 caracteres.',
            
            'required' => 'Os campos devem ser preenchidos corretamente'
        ];

        $request->validate($regras, $mensagem);

        Cadastro::create($request->all());
        return redirect()->route('site.login');
    }

}
