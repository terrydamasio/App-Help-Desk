<form action="{{ route('site.cadastro') }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Nome" name="nome" value="{{ old('nome') }}">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('') }}">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Senha" name="senha">
    </div>
    <div class="form-group" style="display: flex; justify-content: center;">
        <a href="{{ route('site.login') }}">Já tem um cadastro?</a>
    </div>

    <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
    
    <p style="color:red;">
        @if($errors->any())
            {{ $errors->first() }}
        @endif
    </p>
</form>