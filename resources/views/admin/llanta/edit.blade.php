@extends('adminlte::page')

@section('title', 'Editar Producto')


@can('admin.inicio')


@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Editar un Producto
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn" style="background-color: rgb(190, 131, 21); color: white;" href="{{ route('llanta_index') }}">Regresar <i class="fas fa-reply"></i></a>
        </div>
    </div>
</div>

@stop

@section('content')
    <form action="{{ route('llanta_update', ['id' => $llanta->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div style="margin: 3%;">

            <div class="mb-3">
                <label for="txtNomLlanta" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="txtNomLlanta" name="txtNomLlanta" value="{{ old('txtNomLlanta', $llanta->nombrellanta) }}">
            </div>
            <div class="mb-3">
                <label for="txtNomMarca" class="form-label">Categoría</label>
                <select class="txtNomMarca" style="width: 100%!important; " name="txtNomMarca">
                    @foreach ($marca as $marcas)
                        <option value="{{$marcas->id}}" @if ($llanta->marca_id == $marcas->id) selected="" @endif>{{$marcas->nombremarca}}</option>
                    @endforeach
                </select>            
            </div>
            <div class="mb-3">
                <label for="txtNomFamilia" class="form-label">Familia</label>
                <select class="txtNomFamilia" style="width: 100%!important; " name="txtNomFamilia">
                    @foreach ($familia as $familias)
                        <option value="{{$familias->id}}" @if ($llanta->familia_id == $familias->id) selected="" @endif>{{$familias->vehiculo}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="txtNumRim" class="form-label">Grupo</label>
                <select class="txtNumRim" style="width: 100%!important; " name="txtNumRim">
                    @foreach ($dimension as $dimensions)
                        <option value="{{$dimensions->id}}" @if ($llanta->dimension_id == $dimensions->id) selected="" @endif>{{$dimensions->dimension}}</option>
                    @endforeach
                </select>            
            </div>
            

            <div class="mb-3">
                <label for="txtPrecio" class="form-label">Precio</label>
                <input type="text" class="form-control" id="txtPrecio" name="txtPrecio" value="{{ old('txtPrecio', $llanta->precio) }}">
            </div>

            <div class="mb-3">
                <label for="txtDescripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" value="{{ old('txtDescripcion', $llanta->descripcion) }}">
            </div>
          
            <div class="mb-3">
                <label for="chkActivo" class="mb-3 control-label">Activo</label>
                <div class="mb-3">
                    <input type="checkbox" class="form-controlww" id="chkActivo" name="chkActivo" value="1"@if($llanta->activo == 1) checked @endif>
                </div>
            </div>
            <div class="mb-3">
                <label for="txtFile" class="mb-3 control-label">Imagen</label>
                <div class="mb-3">
                    @if ($llanta->imagen <> "")
                        <img src="{{ ('/img/llantas')."/".$llanta->imagen }}"  alt="" class="img-fluid img-thumbnail" style="width: 200px;"> 
                    @endif
                    <input type="file" class="form-control" id="txtFile" name="txtFile" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" >
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="card-tools text-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a type="button" class="btn btn-secondary" href="{{ route('llanta_index') }}"><i class="fa fa-close"></i> Cancelar</a>
                <button type="submit" class="btn" style="background-color: rgb(190, 131, 21); color: white;"><i class="fas fa-upload"></i> Actualizar</button>
            </div>
        </div>  

    </form>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
@endcan