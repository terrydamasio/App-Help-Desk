<form action="{{ route("app.abrir_chamado") }}" method="post">
@csrf
    <div class="form-group">
        <label>Título</label>
        <input type="text" class="form-control" placeholder="Título" name="titulo">
    </div>
                    
    <div class="form-group">
        <label>Categoria</label>
        <select class="form-control" name="categoria">
            <option value="1">Criação Usuário</option>
            <option value="2">Impressora</option>
            <option value="3">Hardware</option>
            <option value="4">Software</option>
            <option value="5">Rede</option>
        </select>
    </div>
                    
    <div class="form-group">
        <label>Descrição</label>
        <textarea class="form-control" rows="3" name="descricao"></textarea>
    </div>

    <div class="row mt-5">
        <div class="col-6">
            <a href="{{ route('app.home') }}" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
        </div>

        <div class="col-6">
            <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
        </div>
    </div>
</form>