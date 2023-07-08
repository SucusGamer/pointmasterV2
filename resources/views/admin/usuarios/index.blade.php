@extends('adminlte::page')

@section('title', 'Usuarios')


@section('content_header')
    <h1>
        Lista de usuarios
    </h1>
@stop

@section('content')
<table id="servicios" class="table table-striped shadow-lg mt-4" style="width:100%">
    <thead class=" text-white" style="background-color: rgb(190, 131, 21)">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>
                        {{ $usuario->email }}
                    </td>
                    <td width="10px">
                        <a class="btn btn-primary" href="{{route('admin.usuarios.edit', $usuario)}}">Editar</a>
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
