@extends('adminlte::page')

@section('title', 'Crear Servicio')


@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Crear un Servicio
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn" style="background-color: rgb(190, 131, 21); color: white;" href="{{ route('servicio_index') }}">Regresar <i class="fas fa-reply"></i></a>
        </div>
    </div>
</div>

@stop

@section('content')
    <form action="{{ route('servicio_store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div style="margin: 3%;">
            <div class="mb-3">
               
                <label for="txtFile" class="mb-3 control-label">Imagen</label>
                <div class="mb-3">
                    <input type="file" class="form-control" id="txtFile" name="txtFile" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                </div>
            </div>
            <div class="mb-3">
                <label for="txtNomServicio" class="form-label">Nombre del Servicio</label>
                <input type="text" class="form-control" id="txtNomServicio" name="txtNomServicio" placeholder="Escribe el nombre del servicio" required>
            </div>
            <div class="mb-3">
                <label for="txtDescripcionServicio" class="form-label">Descripcion del Servicio</label>
                <textarea class="form-control" id="txtDescripcionServicio" name="txtDescripcionServicio" maxlength="500" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="chkActivo" class="mb-3 control-label">Activo</label>
                <div class="mb-3">
                    <input type="checkbox" class="form-controlww" id="chkActivo" name="chkActivo" value="1">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="card-tools text-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a type="button" class="btn btn-secondary" href="{{ route('servicio_index') }}"><i class="fa fa-close"></i> Cancelar</a>
                <button type="submit" class="btn" style="background-color: rgb(190, 131, 21); color: white;"><i class="fa fa-save"></i> Crear</button>
            </div>
        </div>  

    </form>
@stop

@section('js')
<script src="{{ asset('assets/cropper/dist/cropper.min.js') }}"></script>
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