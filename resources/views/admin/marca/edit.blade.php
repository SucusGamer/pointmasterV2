@extends('adminlte::page')

@section('title', 'Editar Marca')

@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Editar Categoría
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn btn-primary" href="{{ route('marca_index') }}">Regresar <i class="fas fa-reply"></i></a>
        </div>
    </div>
</div>
@stop

@section('content')
    <form action="{{ route('marca_update', ['id' => $marca->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div style="margin: 3%;">
            {{-- <div class="mb-3">
                <label for="txtFile" class="mb-3 control-label">Imagen</label>
                <div class="mb-3">
                    @if ($marca->imagen <> "")
                        <img src="{{ ('/img/marcas')."/".$marca->imagen }}"  alt="" class="img-fluid img-thumbnail">    
                    @endif
                    <input type="file" class="form-control" id="txtFile" name="txtFile" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" >
                </div>
            </div> --}}
            <div class="mb-3">
                <label for="txtNomMarca" class="form-label">Nombre de la categoría</label>
                <input type="text" class="form-control" id="txtNomMarca" name="txtNomMarca" value="{{ old('txtNomMarca', $marca->nombremarca) }}">
            </div>
          
            <div class="mb-3">
                <label for="chkActivo" class="mb-3 control-label">Activo</label>
                <div class="mb-3">
                    <input type="checkbox" class="form-controlww" id="chkActivo" name="chkActivo" value="1" @if($marca->activo == 1) checked="checked" @endif>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="box-tools" style="margin-left: 75%;">
                <a type="button" class="btn btn-secondary" href="{{ route('marca_index') }}"><i class="fa fa-close"></i> Cancelar</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-upload"></i> Actualizar</button>
            </div>
        </div>  
    </form>
@stop
