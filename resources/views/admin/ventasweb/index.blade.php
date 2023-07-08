@extends('adminlte::page')

@section('title', 'Ventas Web')


@section('content_header')
    <h1>
        Ventas Web
    </h1>

@stop

@section('content')
    <table id="servicios" class="table table-striped shadow-lg mt-4" style="width:100%">
        <thead class=" text-white" style="background-color: rgb(190, 131, 21)">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo y Celular</th>
                <th scope="col">Ver Productos</th>
                <th scope="col">Total del Pedido</th>
                <th scope="col">Estatus</th>
                <th scope="col">Fecha de venta</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($ventasweb as $ventaswebs)
                    <tr>
                        <td>
                            @if ($ventaswebs->ventahecha == 1)
                            LLV - {{ $ventaswebs->id }}
                            @endif
                        </td>
                        <td>{{ $ventaswebs->nombre }} {{$ventaswebs->apellido}}</td>
                        <td style="font-size: 14px">
                            {{ $ventaswebs->email }} <br> {{ $ventaswebs->celular }}
                        </td>
                        <td>
                            <a class="btn showpropedido" data-pedidoid="{{$ventaswebs->id}}" type="button" style="background-color: rgb(190, 131, 21); color: white;" data-toggle="modal" data-target="#staticBackdrop">Ver Productos</a>
                        </td>
                        <td>$ {{ $ventaswebs->total }}</td>
                        <td>
                            @if ($ventaswebs->ventahecha == 1)
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                    </svg>
                                    Vendido
                                </a>
                                
                            @else
                                <a> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-x-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM6.854 8.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293 6.854 8.146z"/>
                                    </svg>
                                    Sin Productos
                                </a>
                            @endif
                        </td>
                        <td>{{ $ventaswebs->updated_at }}</td>
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
