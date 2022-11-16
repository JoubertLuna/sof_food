<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
  /**
   * Repository Usuário
   */
  private $repository;

  public function __construct(User $usuario)
  {
    $this->repository = $usuario;
  }
  /**
   * index
   */
  public function index()
  {

    $usuarios = $this->repository->latest()->paginate();
    return view('admin.pages.usuarios.index', compact('usuarios'));
  }

  /**
   * create
   */
  public function create()
  {
    return view('admin.pages.usuarios.create');
  }

  /**
   * store
   */
  public function store(UsuarioRequest $request)
  {

    if (User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'image' => $request->image,
    ])) {
      return redirect()->route('usuarios.index')->with('success', 'Usuário cadastrado com sucesso');
    } else {
      return redirect()->route('usuarios.index')->with('error', 'Falha ao cadastrar o usuário');
    }
  }

  /**
   * show
   */
  public function show($id)
  {
    $usuario = $this->repository->where('id', $id)->first();

    if (!$usuario) {
      return redirect()->back();
    }
    return view('admin.pages.usuarios.show', compact('usuario'));
  }

  /**
   * edit
   */
  public function edit($id)
  {
    $usuario = $this->repository->where('id', $id)->first();

    if (!$usuario) {
      return redirect()->back();
    }

    return view('admin.pages.usuarios.edit', compact('usuario'));
  }

  /**
   * update
   */
  public function update(UsuarioRequest $request, $id)
  {
    $usuario = $this->repository->where('id', $id)->first();

    if (!$usuario) {
      return redirect()->back();
    }

    if ($usuario->update([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'image' => $request->image,
    ])) {
      return redirect()->route('usuarios.index')->with('success', 'Usuário editado com sucesso');
    } else {
      return redirect()->route('usuarios.index')->with('error', 'Falha ao editar o usuário');
    }
  }

  /**
   * excluir
   */
  public function excluir($id)
  {
    $usuario = User::find($id);
    if ($usuario) {
      $usuario->delete();
      return redirect()->route('usuarios.index')->with('danger', 'Usuário excluído com sucesso!');
    } else {
      return redirect()->route('usuarios.index')->with('error', 'Falha ao excluir usuário');
    }
  }
}
