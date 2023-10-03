<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaChamadoController extends Controller
{
    public function index() {
        return view('app.consultar_chamado', ['titulo' => 'Consultar Chamado']);
    }
}
