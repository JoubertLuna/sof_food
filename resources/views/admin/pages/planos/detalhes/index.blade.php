@extends('adminlte::page')

@section('title', 'SOF FOOD')

@section('content_header')
    <a href="{{ route('detalhes.create', $plano->id) }}" class="btn btn-danger"><i class="fas fa-plus-circle"></i> Novo Detalhe</a>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nome do Plano</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalhes as $detalhe)
                        <tr>
                            <td>{{ $detalhe->nome }}</td>

                            <td>
                                <a href="{{ route('plano.show', $plano->id) }}" title="Detalhes do Plano"><i
                                        class="fas fa-list text-warning"></i></a>

                                <a href="{{ route('plano.edit', $plano->id) }}" title="Editar Dados"><i
                                        class="fa fa-edit text-primary"></i></a>

                                <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                          window.location.href = '{{ route('plano.excluir', $plano->id) }}' }"
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
