@extends('adminlte::page')

@section('title', 'Editar Numero Rin')


@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Editar Numero de Rin
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn" style="background-color: rgb(190, 131, 21); color: white;" href="{{ route('numerorin_index') }}">Regresar <i class="fas fa-reply"></i></a>
        </div>
    </div>
</div>
    <h1>
    </h1>

@stop

@section('content')
    <form action="{{ route('numerorin_update', ['id' => $rin->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div style="margin: 3%;">

            <div class="mb-3">
                <label for="txtNumrin" class="form-label">Nombre de la Marca</label>
                <input type="text" class="form-control" id="txtNumrin" name="txtNumrin" value="{{ old('txtNumrin', $rin->numrin) }}">
            </div>

            <div class="mb-3">
                <label for="txtTipoV" class="form-label">Tipo de Vehiculo</label>
                <select class="txtTipoV" style="width: 100%!important; " name="txtTipoV">
                    @foreach ($tipovehiculo as $tipovehiculos)
                        <option value="{{$tipovehiculos->id}}" @if ($rin->tipovehiculo_id == $tipovehiculos->id) selected="" @endif>{{$tipovehiculos->vehiculo}}</option>
                    @endforeach
                </select>            
            </div>
          
            <div class="mb-3">
                <label for="chkActivo" class="mb-3 control-label">Activo</label>
            </div>
            <div class="checkbox-wrapper-31">
                <input checked="" type="checkbox" id="chkActivo" name="chkActivo" value="1"@if($rin->activo == 1) checked="checked"                        
                @endif>
                <svg viewBox="0 0 35.6 35.6">
                  <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                  <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                  <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                </svg>
            </div>
        </div>
        <div class="box-footer">
            <div class="box-tools" style="margin-left: 75%;">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a type="button" class="btn btn-secondary" href="{{ route('numerorin_index') }}"><i class="fa fa-close"></i> Cancelar</a>
                <button type="submit" class="btn" style="background-color: rgb(190, 131, 21); color: white;"><i class="fas fa-upload"></i> Actualizar</button>
            </div>
        </div>  

    </form>
@stop

@section('css')
    <style>
        .checkbox-wrapper-31:hover .check {
        stroke-dashoffset: 0;
        }

        .checkbox-wrapper-31 {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 40px;
        }

        .checkbox-wrapper-31 .background {
        fill: #ccc;
        transition: ease all 0.6s;
        -webkit-transition: ease all 0.6s;
        }

        .checkbox-wrapper-31 .stroke {
        fill: none;
        stroke: #fff;
        stroke-miterlimit: 10;
        stroke-width: 2px;
        stroke-dashoffset: 100;
        stroke-dasharray: 100;
        transition: ease all 0.6s;
        -webkit-transition: ease all 0.6s;
        }

        .checkbox-wrapper-31 .check {
        fill: none;
        stroke: #fff;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-width: 2px;
        stroke-dashoffset: 22;
        stroke-dasharray: 22;
        transition: ease all 0.6s;
        -webkit-transition: ease all 0.6s;
        }

        .checkbox-wrapper-31 input[type=checkbox] {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        margin: 0;
        opacity: 0;
        -appearance: none;
        -webkit-appearance: none;
        }

        .checkbox-wrapper-31 input[type=checkbox]:hover {
        cursor: pointer;
        }

        .checkbox-wrapper-31 input[type=checkbox]:checked + svg .background {
        fill: #6cbe45;
        }

        .checkbox-wrapper-31 input[type=checkbox]:checked + svg .stroke {
        stroke-dashoffset: 0;
        }

        .checkbox-wrapper-31 input[type=checkbox]:checked + svg .check {
        stroke-dashoffset: 0;
        }

    </style>
    
@endsection