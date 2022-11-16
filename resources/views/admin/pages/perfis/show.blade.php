@extends('adminlte::page')

@section('title', 'Detalhes do Perfil')

@section('content_header')
    <div align="left">
        <h1>Detalhes do Perfil <b>{{ $perfil->nome }}</b></h1>
    </div>
    <div align="right">
        <a href="{{ route('perfis.index') }}" class="btn btn-danger">Voltar</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <hr>
                        <li>
                            <strong>Nome: </strong> {{ $perfil->nome }}
                        </li>
                        <li>
                            <strong>Descrição: </strong> {{ $perfil->descricao }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
