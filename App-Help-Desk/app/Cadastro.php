<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['nome', 'email', 'senha'];

}
