@extends('adminlte::page')

@section('title', "Editar Perfil {$perfil->nome}")

@section('content_header')
    <div align="right">
        <a href="{{ route('perfis.index') }}" class="btn btn-danger">Voltar</a>
    </div>
@stop

@section('content')
    <div class="card">

        <div class="card-body">
            <form action="{{ route('perfis.update', $perfil->id) }}" method="POST" class="form">
                @method('PUT')
                @csrf

                @include('admin.pages.perfis._partials.form')

            </form>
        </div>
    </div>
@stop
