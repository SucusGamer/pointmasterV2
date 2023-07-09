@extends('adminlte::page')

@section('title', 'Editar Tipo Vehiculo')


@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Editar Familia
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn" style="background-color: rgb(190, 131, 21); color: white;" href="{{ route('tipovehiculo_index') }}">Regresar <i class="fas fa-reply"></i></a>
        </div>
    </div>
</div>

@stop

@section('content')
    <form action="{{ route('tipovehiculo_update', ['id' => $vehiculo->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div style="margin: 3%;">

            <div class="mb-3">
                <label for="txtNomVehiculo" class="form-label">Nombre de la familia</label>
                <input type="text" class="form-control" id="txtNomVehiculo" name="txtNomVehiculo" value="{{ old('txtNomVehiculo', $vehiculo->vehiculo) }}">
            </div>
          
            <div class="mb-3">
                <label for="chkActivo" class="mb-3 control-label">Activo</label>
                <div class="mb-3">
                    <input type="checkbox" class="form-controlww" id="chkActivo" name="chkActivo" value="1"@if($vehiculo->activo == 1) checked="checked"                        
                    @endif>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="box-tools" style="margin-left: 75%;">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a type="button" class="btn btn-secondary" href="{{ route('tipovehiculo_index') }}"><i class="fa fa-close"></i> Cancelar</a>
                <button type="submit" class="btn" style="background-color: rgb(190, 131, 21); color: white;"><i class="fas fa-upload"></i> Actualizar</button>
            </div>
        </div>  

    </form>
@stop