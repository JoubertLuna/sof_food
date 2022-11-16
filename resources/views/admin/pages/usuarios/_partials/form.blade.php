@include('admin.includes.alerts')

<div class="form-group">
    <h4><b>Usuários</b></h4>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nome do Usuário:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nome do Usuário"
                    value="{{ $usuario->name ?? old('name') }}" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>E-mail do Usuário:</label>
                <input type="email" name="email" id="email" class="form-control"
                    placeholder="E-mail do Usuário"
                    value="{{ $usuario->email ?? old('email') }}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Senha do Usuário:</label>
                <input type="password" name="password" id="password"
                    class="form-control" placeholder="Senha do Usuário"
                    value="{{ old('password', '') }}" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Confirmar Senha do Usuário:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                    placeholder="Confirmar Senha do Usuário" value="{{ old('password_confirmation', '') }}"
                    required>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-danger"><i class="fas fa-save"></i> Cadastrar Usuário</button>
</div>
