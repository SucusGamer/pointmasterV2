@extends('adminlte::page')

@section('title', 'Contactos')


@section('content_header')
    <h1>
        Contactos
    </h1>

@stop

@section('content')
    <table id="servicios" class="table table-striped shadow-lg mt-4" style="width:100%">
        <thead class=" text-white" style="background-color: rgb(190, 131, 21)">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo <li class="fa fa-comments"></li></th>
                <th scope="col">Mensaje</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($contacto as $contactos)
                    <tr>
                        <td>{{ $contactos->nombre }} {{$contactos->apellido}}</td>
                        <td style="font-size: 14px">
                            {{ $contactos->correo }}
                        </td>
                        <td style="font-size: 12px">
                            {{ $contactos->mensaje }}
                        </td>
                        <td>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <form  action="{{route('contactovisto')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="entregarpedido" value="1">
                                        <input type="hidden" name="producto_id" class="pedidoid" value="{{$contactos->id}}">

                                        <button type="submit" style="background-color:dodgerblue; color: white;" title="Visto" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Productos Pedidos por el Cliente</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body productopedidobtn">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar ventana</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="display:none">
        <input type="hidden" id="showpropedido" value="{{route('showpropedido')}}">
    </div>
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
    <script>
       $("#servicios").on("click", ".showpropedido", function(e){
            e.preventDefault();
               var pedidoID = $(this).data('pedidoid');
                $(".productopedidobtn").empty();
                var routeurlx= $("#showpropedido").val();
                var token=$("#token").val();
            $.ajax({
                type:'GET',
                url:routeurlx,
                headers: {'X-CSRF-TOKEN':token},
                dataType:'json',
                data:{pedidoID:pedidoID},
            }).done(function(msg){
                if(msg.success){
                    $(".productopedidobtn").append(msg.html);
                        //$("#ModalFamilias").modal({backdrop: true});
                                        console.log(11);

                        $("#staticBackdrop").modal("show");
                    }else{
                        $.notify(msg.mensaje,"error");
                    }
                }).fail(function(msg){
                    $.notify(
                    "Ocurrió un error","error"

                );console.log(112);
            });             
        });
    </script>
@stop
