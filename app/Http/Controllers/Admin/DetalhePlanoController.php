<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DetalhePlano;
use App\Models\Admin\Plano;
use Illuminate\Http\Request;

class DetalhePlanoController extends Controller
{
  protected $repository, $plano;

  public function __construct(DetalhePlano $detalhes, Plano $plano)
  {
    $this->repository = $detalhes;
    $this->plano = $plano;
  }

  /**
   * Index
   */
  public function index($id)
  {

    if (!$plano = $this->plano->where('id', $id)->first()) {
      return redirect()->back();
    }

    $detalhes = $plano->detalhes()->paginate();

    return view('admin.pages.planos.detalhes.index', compact('plano', 'detalhes'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
