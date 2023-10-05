<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbreChamadoController extends Controller
{
    public function index() {
        print_r($_POST);
        return view('app.abrir_chamado', ['titulo' => 'Abrir Chamado']);
    }
}
