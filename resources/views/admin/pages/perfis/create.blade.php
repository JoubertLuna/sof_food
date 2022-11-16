@extends('adminlte::page')

@section('title', 'Cadastrar Perfil')

@section('content_header')
    <div align="right">
        <a href="{{ route('perfis.index') }}" class="btn btn-danger">Voltar</a>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('perfis.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.perfis._partials.form')

            </form>
        </div>
    </div>
@stop
