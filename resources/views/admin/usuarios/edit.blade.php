@extends('adminlte::page')

@section('title', 'Servicios')


@section('content_header')
    <h1>
        Usuario
    </h1>
@stop

@section('content')
{{-- @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif --}}
<div class="card">
    <div class="card-body">
        <p class="h5">Nombre:</p>
        <p class="form-control">{{$usuario->name}}</p>
        {!! Form::model($usuario, ['route' => ['admin.usuarios.update', $usuario], 'class' => 'AsignarRol', 'method' => 'put']) !!}
           {{--  @foreach($roles as $role) --}}
            <div>
                <label>
                    {!! Form::checkbox('roles[]', $roles->id, null, ['class' => 'mr-1']) !!}
                    {{$roles->name}}
                </label>
            </div>
           {{--  @endforeach --}}
            {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
@stop

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('info'))
    <script>
        Swal.fire(
      '¡Completado!',
      'Se asignó los roles correctamente.',
      'Cumplido.'
    )
    </script>
@endif

<script>
    $('.AsignarRol').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡El siguiente usuario se le será asignado las siguientes funcionalidades!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonColorText: 'Cancelar',
            confirmButtonText: 'Si!'
            }).then((result) => {
            if (result.isConfirmed) {

                this.submit();
            }
        })
    });

</script>
@stop
