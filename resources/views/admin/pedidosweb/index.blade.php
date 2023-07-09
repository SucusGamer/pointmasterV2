@extends('adminlte::page')

@section('title', 'Pedidos Web')


@section('content_header')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Pedidos Web
            </h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn" style="background-color: rgb(190, 131, 21); color: white;" href="/">Regresar al Sitio Web <i class="fas fa-reply"></i></a>
        </div>
    </div>
</div>

@stop

@section('content')
    <table id="servicios" class="table table-striped shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo y Celular</th>
                <th scope="col">Productos</th>
                <th scope="col">Total del Pedido</th>
                <th scope="col">Estatus</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($pedidosweb as $pedidoswebs)
                    <tr>
                        <td>{{ $pedidoswebs->id }}</td>
                        <td>{{ $pedidoswebs->nombre }} {{$pedidoswebs->apellido}}</td>
                        <td style="font-size: 14px">
                            {{ $pedidoswebs->email }} <br> {{ $pedidoswebs->celular }}
                        </td>
                        <td>
                            <a class="btn showpropedido" data-pedidoid="{{$pedidoswebs->id}}" type="button" style="background-color: #428bca; color: white;" data-toggle="modal" data-target="#staticBackdrop">Ver <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>

                        <td>$ {{ $pedidoswebs->total }}</td>
                        <td>
                            @if ($pedidoswebs->ventahecha == 0)
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-dash" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M5.5 10a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                    </svg>
                                    Pendiente a Entrega
                                </a>
                                
                            @else
                                <a> <li class="fas fa-toggle-off">Entregado</li></a>
                            @endif
                        </td>
                        <td>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <form  action="{{route('pedidoswebentregar')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="entregarpedido" value="1">
                                        <input type="hidden" name="producto_id" class="pedidoid" value="{{$pedidoswebs->id}}">

                                        <button type="submit" style="background-color: rgb(190, 131, 21); color: white; border-color: transparent" title="Pedido Entregado" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-md-8">
                                    <form action="{{route('pedidoswebcancelar')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="entregarpedido" value="1">
                                        <input type="hidden" name="producto_id" class="pedidoid" value="{{$pedidoswebs->id}} ">

                                        <button style="background-color: rgb(190, 21, 21); color: white; border-color: transparent" title="Pedido Cancelado" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-x-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM6.854 8.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293 6.854 8.146z"/>
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
