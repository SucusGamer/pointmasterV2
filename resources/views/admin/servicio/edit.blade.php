@extends('adminlte::page')

@section('title', 'Editar Servicio')


@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Editar un Servicio
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn" style="background-color: rgb(190, 131, 21); color: white;" href="{{ route('servicio_index') }}">Regresar <i class="fas fa-reply"></i></a>
        </div>
    </div>
</div>
    <h1>
    </h1>

@stop

@section('content')
    <form action="{{ route('servicio_update', ['id' => $servicio->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div style="margin: 3%;">
            <div class="mb-3">
                <label for="txtFile" class="mb-3 control-label">Imagen</label>
                <div class="mb-3">
                    @if ($servicio->imagen <> "")
                        <img src="{{ ('/img/servicios')."/".$servicio->imagen }}"  alt="" class="img-fluid img-thumbnail">    
                    @endif
                    <input type="file" class="form-control" id="txtFile" name="txtFile" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" >
                </div>
            </div>
            <div class="mb-3">
                <label for="txtNomServicio" class="form-label">Nombre del Servicio</label>
                <input type="text" class="form-control" id="txtNomServicio" name="txtNomServicio" value="{{ old('txtNomServicio', $servicio->nombreservicio) }}">
            </div>
            <div class="mb-3">
                <label for="txtDescripcionServicio" class="form-label">Descripcion del Servicio</label>
                <input type="text" class="form-control" id="txtDescripcionServicio" name="txtDescripcionServicio" value="{{ old('txtDescripcionServicio', $servicio->descripcionservicio) }}">

            </div>
            <div class="mb-3">
                <label for="chkActivo" class="mb-3 control-label">Activo</label>
                <div class="mb-3">
                    <input type="checkbox" class="form-controlww" id="chkActivo" name="chkActivo" value="1"@if($servicio->activo == 1) checked="checked"                        
                    @endif>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="box-tools" style="margin-left: 75%;">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a type="button" class="btn btn-secondary" href="{{ route('servicio_index') }}"><i class="fa fa-close"></i> Cancelar</a>
                <button type="submit" class="btn" style="background-color: rgb(190, 131, 21); color: white;"><i class="fas fa-upload"></i> Actualizar</button>
            </div>
        </div>  

    </form>
@stop