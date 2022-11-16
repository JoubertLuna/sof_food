@extends('adminlte::page')

@section('title', 'SOF FOOD')

@section('content_header')
    <a href="{{ route('perfis.create') }}" class="btn btn-danger"><i class="fas fa-plus-circle"></i> Novo Perfil</a>
@stop

@section('content')

    @include('admin.includes.alerts')

    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nome do Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($perfis as $perfil)
                        <tr>
                            <td>{{ $perfil->nome }}</td>

                            <td>
                                {{-- <a href="{{ route('.permissions', ->id) }}" title="Detalhes das Permissões"><i class="fas fa-lock text-dark"></i></a> --}}

                                <a href="{{ route('perfis.show', $perfil->id) }}" title="Ver Perfil"><i
                                        class="fas fa-list text-warning"></i></a>

                                <a href="{{ route('perfis.edit', $perfil->id) }}" title="Editar Dados"><i
                                        class="fa fa-edit text-primary"></i></a>

                                <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                          window.location.href = '{{ route('perfis.excluir', $perfil->id) }}' }"
                                    title="Excluir Dados">
                                    <i class="fa fa-trash text-danger"></i></a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@stop
