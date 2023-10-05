<form action="{{ route('site.login') }}" method="post">
    @csrf
    <div class="form-group">
        <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Senha" name="senha" value="{{ old('senha') }}">
    </div>

    <div class="form-group" style="display: flex; justify-content: center;">
        <a href="{{ route('site.cadastro') }}">Quero me cadastrar!</a>
    </div>
    
    <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
    
    <p style="color:red;">
        {{ $errors->any() ? $errors->first() : '' }}
        {{ isset($erro) && $erro != '' ? $erro : '' }}
    </p>
</form>

