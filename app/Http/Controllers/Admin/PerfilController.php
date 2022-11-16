<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PerfilRequest;
use App\Models\Admin\Perfil;

class PerfilController extends Controller
{
  /**
   * Repository Perfil
   */
  private $repository;

  public function __construct(Perfil $perfil)
  {
    $this->repository = $perfil;
  }

  /**
   * Index
   */
  public function index()
  {
    $perfis = $this->repository->latest()->paginate();
    return view('admin.pages.perfis.index', compact('perfis'));
  }

  /**
   * create
   */
  public function create()
  {
    return view('admin.pages.perfis.create');
  }

  /**
   * store
   */
  public function store(PerfilRequest $request)
  {
    $data = $request->except('_token');

    if ($this->repository->create($data)) {
      return redirect()->route('perfis.index')->with('success', 'Perfil cadastrado com sucesso');
    } else {
      return redirect()->route('perfis.index')->with('error', 'Falha ao cadastrar o Perfil');
    }
  }

  /**
   * show
   */
  public function show($id)
  {
    $perfil = $this->repository->where('id', $id)->first();

    if (!$perfil) {
      return redirect()->back();
    }
    return view('admin.pages.perfis.show', compact('perfil'));
  }

  /**
   * edit
   */
  public function edit($id)
  {
    $perfil = $this->repository->where('id', $id)->first();

    if (!$perfil) {
      return redirect()->back();
    }

    return view('admin.pages.perfis.edit', compact('perfil'));
  }

  /**
   * update
   */
  public function update(PerfilRequest $request, $id)
  {
    $perfil = $this->repository->where('id', $id)->first();

    if (!$perfil) {
      return redirect()->back();
    }

    if ($perfil->update($request->except('_token', '_method'))) {
      return redirect()->route('perfis.index')->with('success', 'Perfil editado com sucesso');
    } else {
      return redirect()->route('perfis.index')->with('error', 'Falha ao editar o Perfil');
    }
  }

  /**
   * excluir
   */
  public function excluir($id)
  {
    $perfil = Perfil::find($id);
    if ($perfil) {
      $perfil->delete();
      return redirect()->route('perfis.index')->with('danger', 'Perfil excluído com sucesso!');
    } else {
      return redirect()->route('perfis.index')->with('error', 'Falha ao excluir Perfil');
    }
  }
}
