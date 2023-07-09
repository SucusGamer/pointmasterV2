@extends('adminlte::page')

@section('title', 'Llantas')


@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Productos
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn btn-primary" style="background-color: #FFA500; border-color: #FFA500;" href="{{ route('llanta_create') }}">Nuevo <i class="fas fa-plus"></i></a>

        </div>
    </div>
</div>

@stop

@section('content')
<table id="servicios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Producto</th>
            <th scope="col">Estatus</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($llanta as $llantas)
        <tr>
            <td>{{ $llantas->id }}</td>
            <td>{{ $llantas->nombrellanta }}</td>
            <td>
                @if ($llantas->activo == 1)
                <span class="badge badge-success"><i class="fas fa-toggle-on"></i> Activo</span>
                @else
                <span class="badge badge-danger"><i class="fas fa-toggle-off"></i> Inactivo</span>
                @endif
            </td>
            <td>
                <a class="btn btn-primary" title="Editar" href="{{ route('llanta_edit', ['id' => $llantas->id]) }}"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    @stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#servicios').DataTable();
        });
    </script>
@stop
