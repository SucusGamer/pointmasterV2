@extends('adminlte::page')

@section('title', 'Llantas')


@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Llantas
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn" style="background-color: rgb(190, 131, 21); color: white;" href="{{ route('llanta_create') }}">Nuevo <i class="fas fa-plus"></i></a>
        </div>
    </div>
</div>

@stop

@section('content')
    <table id="servicios" class="table table-striped shadow-lg mt-4" style="width:100%">
        <thead class=" text-white" style="background-color: rgb(190, 131, 21)">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Llanta</th>
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
                                <a><li class="fas fa-toggle-on">Activo</li></a>
                            @else
                                <a> <li class="fas fa-toggle-off">Inactivo</li></a>
                            @endif
                        </td>
                        <td><a class="btn" style="background-color: rgb(190, 131, 21); color: white;" title="Editar" href="{{ route('llanta_edit', ['id' => $llantas->id]) }}"><i class="fas fa-edit"></i></a></td>
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
