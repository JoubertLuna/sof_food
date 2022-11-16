@include('admin.includes.alerts')

<div class="form-group">
    <h4><b>Cadastro do Perfil</b></h4>
    <hr>
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Perfil"
            value="{{ $perfil->nome ?? old('nome') }}">
    </div>

    <div class="form-group">
        <label>descrição:</label>
        <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição do Perfil"
            value="{{ $perfil->descricao ?? old('descricao') }}">
    </div>

</div>

<div class="form-group">
    <button type="submit" class="btn btn-danger"><i class="fas fa-save"></i> Cadastrar Perfil</button>
</div>
