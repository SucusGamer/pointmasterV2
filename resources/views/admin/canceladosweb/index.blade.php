@extends('adminlte::page')

@section('title', 'Pedidos Web')


@section('content_header')
    <h1>
        Pedidos Web
    </h1>

@stop

@section('content')
    <table id="servicios" class="table table-striped shadow-lg mt-4" style="width:100%">
        <thead class=" text-white" style="background-color: rgb(190, 131, 21)">
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
                            <a class="btn showpropedido" data-pedidoid="{{$pedidoswebs->id}}" type="button" style="background-color: rgb(190, 131, 21); color: white;" data-toggle="modal" data-target="#staticBackdrop">Ver <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>$ {{ $pedidoswebs->total }}</td>
                        <td>
                            @if ($pedidoswebs->ventahecha == 2)
                                <a>
                                    <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                      </svg>
                                    Pedido Cancelado
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

                                        <button type="submit" style="background-color: rgb(22, 131, 46); color: white; border-color: transparent" title="Vender pedido cancelado" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
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
