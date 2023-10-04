<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware;

class LoginController extends Controller
{
    public function index(Request $request) {
        return view('site.login', ['titulo' => 'Login']);
    }
    
    public function __construct() { //2) criar método construtor
		$this->middleware('log.acesso'); //3) acessar o middleware passando a classe do middleware
    }
    
}
