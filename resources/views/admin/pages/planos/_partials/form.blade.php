@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Plano"
        value="{{ $plano->nome ?? old('nome') }}">
</div>

<div class="form-group">
  <label>Preço:</label>
  <input type="text" name="preco" id="preco" class="form-control" placeholder="Preço do Plano"
      value="{{ $plano->preco ?? old('preco') }}">
</div>

<div class="form-group">
  <label>descrição:</label>
  <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição do Plano"
      value="{{ $plano->descricao ?? old('descricao') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-danger"><i class="fas fa-save"></i> Cadastrar Plano</button>
</div>
