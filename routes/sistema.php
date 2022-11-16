<?php

use App\Http\Controllers\Admin\{
  PlanoController,
  UsuarioController
};

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

  #Detalhe Planos
  #Route::get('detalhe/excluir/{id}', [DetalhePlanoController::class, 'excluir'])->middleware(['auth'])->name('detalhe.excluir');
  #Route::resource('planos/{id}/detalhe', DetalhePlanoController::class)->middleware(['auth']);

  #Planos
  Route::get('plano/excluir/{id}', [PlanoController::class, 'excluir'])->middleware(['auth'])->name('plano.excluir');
  Route::resource('plano', PlanoController::class)->middleware(['auth']);
  #planos

  #Usuários
  Route::get('usuarios/excluir/{id}', [UsuarioController::class, 'excluir'])->name('usuarios.excluir');
  Route::resource('usuarios', UsuarioController::class);
  #Usuários
});
