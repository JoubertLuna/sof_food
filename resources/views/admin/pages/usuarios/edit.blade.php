@extends('adminlte::page')

@section('title', "Editar Usuário")

@section('content_header')
    <div align="right">
        <a href="{{ route('usuarios.index') }}" class="btn btn-danger">Voltar</a>
    </div>
@stop

@section('content')
    <div class="card">

        <div class="card-body">
            <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="form">
                @method('PUT')
                @csrf

                @include('admin.pages.usuarios._partials.form')

            </form>
        </div>
    </div>
@stop
