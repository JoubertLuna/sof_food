@extends('adminlte::page')

@section('title', 'Cadastrar Plano')

@section('content_header')
    <div align="right">
        <a href="{{ route('plano.index') }}" class="btn btn-danger">Voltar</a>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('plano.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.planos._partials.form')

            </form>
        </div>
    </div>
@stop
