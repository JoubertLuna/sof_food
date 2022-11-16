@extends('adminlte::page')

@section('title', 'Cadastrar Usuário')

@section('content_header')
    <div align="right">
        <a href="{{ route('usuarios.index') }}" class="btn btn-danger">Voltar</a>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('usuarios.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.usuarios._partials.form')

            </form>
        </div>
    </div>
@stop
