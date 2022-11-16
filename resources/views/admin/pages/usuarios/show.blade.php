@extends('adminlte::page')

@section('title', 'Detalhes do Usuário')

@section('content_header')
    <div align="left">
        <h1>Detalhes do Usuário <b>{{ $usuario->name }}</b></h1>
    </div>
    <div align="right">
        <a href="{{ route('usuarios.index') }}" class="btn btn-danger">Voltar</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <hr>
                        <li>
                            <strong>Nome do Usuário: </strong> {{ $usuario->name }}
                        </li>

                        <li>
                            <strong>E-mail do Usuário: </strong> {{ $usuario->email }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
