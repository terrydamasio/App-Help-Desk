@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    
    @include('partials.topo')

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">

              @include('site.layouts.formulario_login')
             
            </div>
          </div>
        </div>
    </div>
@endsection
