@extends('adminlte::page')

@section('title', 'Detalhes do Plano')

@section('content_header')
    <div align="left">
        <h1>Detalhes do Plano <b>{{ $plano->nome }}</b></h1>
    </div>
    <div align="right">
        <a href="{{ route('plano.index') }}" class="btn btn-danger">Voltar</a>
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
                            <strong>Nome: </strong> {{ $plano->nome }}
                        </li>
                        <li>
                            <strong>URL: </strong> {{ $plano->url }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <hr>
                        <li>
                            <strong>Preço: </strong> R$ {{ number_format($plano->preco, 2, ',', '.') }}
                        </li>
                        <li>
                            <strong>Descrição: </strong> {{ $plano->descricao }}
                        </li>
                    </ul>
                </div>
            </div>
        @stop
