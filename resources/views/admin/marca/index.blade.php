@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Categorías
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn btn-success" href="{{ route('marca_create') }}">Nuevo <i class="fas fa-plus"></i></a>
        </div>
    </div>
</div>
@stop

@section('content')
    <table id="servicios" class="table table-striped shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Categorías </th>
                <th scope="col">Estatus</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marca as $marcas)
                <tr>
                    <td>{{ $marcas->id }}</td>
                    <td>{{ $marcas->nombremarca }}</td>
                    <td>
                        @if ($marcas->activo == 1)
                            <span class="badge badge-success"><i class="fas fa-toggle-on"></i> Activo</span>
                        @else
                            <span class="badge badge-danger"><i class="fas fa-toggle-off"></i> Inactivo</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" title="Editar" href="{{ route('marca_edit', ['id' => $marcas->id]) }}"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#servicios').DataTable();
        });
    </script>
@stop
