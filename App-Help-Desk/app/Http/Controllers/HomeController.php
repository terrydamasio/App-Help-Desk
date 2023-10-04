<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastro;
class HomeController extends Controller
{
    public function index() {
        return view('app.home', ['titulo' => 'Home']);
    }
}
