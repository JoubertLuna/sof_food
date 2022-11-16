<?php

use App\Http\Controllers\Admin\{
  DetalhePlanoController,
  PerfilController,
  PlanoController,
  UsuarioController
};

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {

  #Route para Perfil
  Route::get('perfis/excluir/{id}', [PerfilController::class, 'excluir'])->name('perfis.excluir');
  Route::resource('perfis', PerfilController::class);
  #Route para Perfil

  #Detalhes Plano
  Route::get('detalhes/excluir/{id}', [DetalhePlanoController::class, 'excluir'])->name('detalhes.excluir');
  Route::resource('planos/{id}/detalhes', DetalhePlanoController::class);
  #Detalhes Plano

  #Planos
  Route::get('plano/excluir/{id}', [PlanoController::class, 'excluir'])->name('plano.excluir');
  Route::resource('plano', PlanoController::class);
  #planos

  #Usuários
  Route::get('usuarios/excluir/{id}', [UsuarioController::class, 'excluir'])->name('usuarios.excluir');
  Route::resource('usuarios', UsuarioController::class);
  #Usuários
});
