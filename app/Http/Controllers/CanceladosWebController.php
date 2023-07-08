<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Llanta;
use App\Models\NumeroRin;
use App\Models\PedidoWeb;

use App\Models\TipoVehiculo;
use Illuminate\Http\Request;
use App\Models\DetallesPedidoWeb;

class CanceladosWebController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.inicio');
    }
    public function index()
    {
        
        $pedidosweb = PedidoWeb::all()->where('ventahecha', 2);

        return view('admin.canceladosweb.index', compact('pedidosweb'));
    }

    public function pedidoswebentregar(Request $request)
    {
        $pedido = PedidoWeb::find($request->producto_id);
        $pedido->ventahecha = 1; 
        $pedido->save();

        return back()->with("success","$pedido->id ¡Se ha entregado el Pedido!");
    }

    public function pedidoswebcancelar(Request $request)
    {
        $pedido = PedidoWeb::find($request->producto_id);
        $pedido->ventahecha = 2; 
        $pedido->save();

        return back()->with("success","$pedido->id ¡Se ha cancelado el Pedido!");
    }

    public function showpropedido(Request $request)
    {
        $pedidoweb = PedidoWeb::find($request->pedidoID);
        if ($pedidoweb){
            $html = "";
            foreach($pedidoweb->detallepedido as $detalle){
                $nombrellanta = "";
                foreach($detalle->llanta as $llantaselect){
                    $nombrellanta .= "
                        
                        $llantaselect->nombrellanta

                    ";
                }
                $html .= "
                <div class='card mb-3' style='max-width: 18rem; border-color:rgb(190, 131, 21);'>
                    <div class='card-body'>
                        <h5 class='card-title'><strong>".$nombrellanta."</strong></h5>
                        <p class='card-text'>
                            Cantidad Solicitada: ".$detalle->cantidad."<br>
                            Precio Unitario: ".$detalle->preciounitario."<br>
                            Importe Total: ".$detalle->importe."
                        </p>
                    </div>
                </div>
                ";
                //dd($nombrellanta);
            }
            return response()->json(['success'=>true, 'html'=>$html]);
        }else{
            return response()->json(['danger'=>true, 'mensaje'=>'No se encontró un Detalle del pedido']);
        }
    }


    
}
