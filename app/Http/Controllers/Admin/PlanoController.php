<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanoRequest;
use App\Models\Admin\Plano;

class PlanoController extends Controller
{
  private $repository;

  public function __construct(Plano $plano)
  {
    $this->repository = $plano;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $planos = $this->repository->latest()->paginate();

    return view('admin.pages.planos.index', compact('planos'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.pages.planos.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\PlanoRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(PlanoRequest $request)
  {

    $data = $request->except('_token');

    if ($this->repository->create($data)) {
      return redirect()->route('plano.index')->with('success', 'Plano cadastrado com sucesso');
    } else {
      return redirect()->route('plano.index')->with('error', 'Falha ao cadastrar o plano');
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $plano = $this->repository->where('id', $id)->first();

    if (!$plano) {
      return redirect()->back();
    }
    return view('admin.pages.planos.show', compact('plano'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $plano = $this->repository->where('id', $id)->first();

    if (!$plano) {
      return redirect()->back();
    }

    return view('admin.pages.planos.edit', compact('plano'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\PlanoRequest  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(PlanoRequest $request, $id)
  {
    $plano = $this->repository->where('id', $id)->first();

    if (!$plano) {
      return redirect()->back();
    }

    if ($plano->update($request->except('_token', '_method'))) {
      return redirect()->route('plano.index')->with('success', 'Plano editado com sucesso');
    } else {
      return redirect()->route('plano.index')->with('error', 'Falha ao editar o plano');
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function excluir($id)
  {
    $plano = Plano::find($id);
    if ($plano) {
      $plano->delete();
      return redirect()->route('plano.index')->with('danger', 'Plano excluído com sucesso!');
    } else {
      return redirect()->route('plano.index')->with('error', 'Falha ao excluir plano');
    }
  }
}
