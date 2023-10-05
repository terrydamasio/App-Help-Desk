<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Usuario;

class LoginController extends Controller
{
    public function index(Request $request) {

      $erro = '';

      if($request->get('erro') == 1) {
        $erro = 'Usuario e(ou) senha não existe';
      }

      if($request->get('erro') == 2) {
        $erro = 'Necessário realizar login para ter acesso a página';
      }

      return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request) {
      $regras = [
        'email' => 'email',
        'senha' => 'required'
      ];

      $mensagem = [
        'senha.email' => 'O email é obrigatório.',
        'senha.required' => 'A senha é obrigatório.'
      ];

      $request->validate($regras, $mensagem);

      //recuperar os parametros do formulário
      $email = $request->get('email');
      $senha = $request->get('senha');

      //iniciar Model User 
      $user = new Usuario();
      $usuario = $user->where('email', $email)->where('senha', $senha)->get()->first();

      if(isset($usuario->nome)) {

        session_start();
        $_SESSION['name'] = $usuario->nome;
        $_SESSION['email'] = $usuario->email;

        return redirect()->route('app.home');
      } else {
        return redirect()->route('site.login', ['erro' => 1]);
      }
    }

    public function sair() {
      session_destroy();

      return redirect()->route('site.login');
    }
    
}
