@extends('adminlte::page')

@section('title', 'Crear una Llanta')


@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Crear una Llanta
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn" style="background-color: rgb(190, 131, 21); color: white;" href="{{ route('llanta_index') }}">Regresar <i class="fas fa-reply"></i></a>
        </div>
    </div>
</div>

@stop

@section('content')
    <form action="{{ route('llanta_store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div style="margin: 3%;">
            <div class="mb-3">
                <label for="txtFile" class="mb-3 control-label">Imagen</label>
                <div class="mb-3">
                    <input type="file" class="form-control" id="txtFile" name="txtFile" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                </div>
            </div>
            <div class="mb-3">
                <label for="txtNomLlanta" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="txtNomLlanta" name="txtNomLlanta" placeholder="Escribe el nombre de la llanta">
            </div>
            <div class="mb-3">
                <label for="txtNomMarca" class="form-label">Marca</label>
                <select class="txtNomMarca" style="width: 100%!important; " name="txtNomMarca">
                    @foreach ($marca as $marcas)
                        <option value="{{$marcas->id}}">{{$marcas->nombremarca}}</option>
                    @endforeach
                </select>            
            </div>

            <div class="mb-3">
                <label for="txtNumRim" class="form-label">Dimension Llanta</label>
                <select class="txtNumRim" style="width: 100%!important;" name="txtNumRim">
                    @foreach ($dimension as $dimensions)
                        <option value="{{$dimensions->id}}">{{$dimensions->dimension}}</option>
                    @endforeach
                </select>            
            </div>

            <div class="mb-3">
                <label for="txtPrecio" class="form-label">Precio</label>
                <input type="text" class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Escribe el precio de la llanta $">
            </div>

            <div class="mb-3">
                <label for="txtDescripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" placeholder="Escribe una breve descipcion sobre la llanta">
            </div>
            
            <div class="mb-3">
                <label for="chkActivo" class="mb-3 control-label">Activo</label>
            </div>

            <div class="checkbox-wrapper-31">
                <input checked="che" type="checkbox" id="chkActivo" name="chkActivo" value="1" >
                <svg viewBox="0 0 35.6 35.6">
                  <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                  <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                  <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                </svg>
            </div>

        </div>
        <div class="card-footer">
            <div class="card-tools text-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a type="button" class="btn btn-secondary" href="{{ route('llanta_index') }}"><i class="fa fa-close"></i> Cancelar</a>
                <button type="submit" class="btn" style="background-color: rgb(190, 131, 21); color: white;"><i class="fa fa-save"></i> Crear</button>
            </div>
        </div>  

    </form>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
@stop


@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/cropper/dist/cropper.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('.txtNomMarca').select2();
    $('.txtTipoVehiculo').select2();
    $('.txtNumRim').select2();
});
</script>
<script type="text/javascript">
    $(function () {
        'use strict';

        var URL = window.URL || window.webkitURL;
        var $image = $('#image');
        /*var $dataX = $('#dataX');
        var $dataY = $('#dataY');
        var $dataHeight = $('#dataHeight');
        var $dataWidth = $('#dataWidth');
        var $dataRotate = $('#dataRotate');
        var $dataScaleX = $('#dataScaleX');
        var $dataScaleY = $('#dataScaleY');*/
        var options = {
            aspectRatio: 200 / 200,
            preview: '.img-preview',
            minContainerHeight: 400,
            dragMode: 'move',
            crop: function (e) {
                /*$dataX.val(Math.round(e.detail.x));
                $dataY.val(Math.round(e.detail.y));
                $dataHeight.val(Math.round(e.detail.height));
                $dataWidth.val(Math.round(e.detail.width));
                $dataRotate.val(e.detail.rotate);
                $dataScaleX.val(e.detail.scaleX);
                $dataScaleY.val(e.detail.scaleY);*/

                $("#cropped_value").val(parseInt(e.detail.width) + "," + parseInt(e.detail.height) + "," + parseInt(e.detail.x) + "," + parseInt(e.detail.y) + "," + parseInt(e.detail.rotate));
            }
        };
        var originalImageURL = $image.attr('src');
        var uploadedImageName = 'cropped.jpg';
        var uploadedImageType = 'image/jpeg';
        var uploadedImageURL;

        // Cropper
        $image.on({
            ready: function (e) {
                //console.log(e.type);
                $("#image").show('fast');
            },
            cropstart: function (e) {
                //console.log(e.type, e.detail.action);
            },
            cropmove: function (e) {
                //console.log(e.type, e.detail.action);
            },
            cropend: function (e) {
                //console.log(e.type, e.detail.action);
            },
            crop: function (e) {
                //console.log(e.type);
            },
            zoom: function (e) {
                //console.log(e.type, e.detail.ratio);
            }
        }).cropper(options);

        // Import image
        var $inputImage = $('#txtFile');

        if (URL) {
            $inputImage.change(function () {
                var files = this.files;
                var file;

                if (!$image.data('cropper')) {
                    alert("alert");
                    return;
                }

                if (files && files.length) {
                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        uploadedImageName = file.name;
                        uploadedImageType = file.type;

                        if (uploadedImageURL) {
                            URL.revokeObjectURL(uploadedImageURL);
                        }

                        uploadedImageURL = URL.createObjectURL(file);
                        $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
                        //$inputImage.val('');
                    } else {
                        window.alert('Please choose an image file.');
                    }
                }
            });
        } else {
            $inputImage.prop('disabled', true).parent().addClass('disabled');
        }
    });
</script>
@stop