@extends('adminlte::page')

@section('title', 'Editar Marca')


@section('content_header')
    <h1>
        Editar Marca
    </h1>

    <a class="btn" style="margin-left: 910px; background-color: rgb(190, 131, 21); color: white;" href="{{ route('marca_index') }}">Regresar <i class="fas fa-reply"></i></a>
@stop

@section('content')
    <form action="{{ route('marca_update', ['id' => $marca->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div style="margin: 3%;">
            <div class="mb-3">
                <label for="txtFile" class="mb-3 control-label">Imagen</label>
                <div class="mb-3">
                    @if ($marca->imagen <> "")
                        <img src="{{ ('/img/marcas')."/".$marca->imagen }}"  alt="" class="img-fluid img-thumbnail">    
                    @endif
                    <input type="file" class="form-control" id="txtFile" name="txtFile" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" >
                </div>
            </div>
            <div class="mb-3">
                <label for="txtNomMarca" class="form-label">Nombre de la Marca</label>
                <input type="text" class="form-control" id="txtNomMarca" name="txtNomMarca" value="{{ old('txtNomMarca', $marca->nombremarca) }}">
            </div>
          
            <div class="mb-3">
                <label for="chkActivo" class="mb-3 control-label">Activo</label>
                <div class="mb-3">
                    <input type="checkbox" class="form-controlww" id="chkActivo" name="chkActivo" value="1"@if($marca->activo == 1) checked="checked"                        
                    @endif>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="box-tools" style="margin-left: 75%;">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a type="button" class="btn btn-secondary" href="{{ route('marca_index') }}"><i class="fa fa-close"></i> Cancelar</a>
                <button type="submit" class="btn" style="background-color: rgb(190, 131, 21); color: white;"><i class="fas fa-upload"></i> Actualizar</button>
            </div>
        </div>  

    </form>
@stop