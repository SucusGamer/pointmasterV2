<?php

namespace App\Http\Controllers;

use Cart;
use Carbon\Carbon;
use App\Http\Controllers\Reportes\ReporteCheckoutController;
use App\Http\Controllers\Reportes\headerfooter;
use App\Models\Llanta;
use App\Models\PedidoWeb;
use Illuminate\Http\Request;
use App\Models\DetallesPedidoWeb;
use Illuminate\Support\Facades\DB;
use Codedge\Fpdf\Fpdf\Fpdf;

class CarritoController extends Controller
{
    protected $fpdf;

    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }
    public function agregarItem(Request $request){
        //dd(11);
        $producto = Llanta::find($request->producto_id);
        //dd($producto);
        Cart::add([
            'id' => $producto->id,
            'name' => $producto->nombrellanta,
            'price' => $producto->precio,
            'qty' => 1,
            'weight' => 1,
            'options' => [
              'urlfoto'  => $producto->imagen,

            ],
        ]);

        return back()->with("success","$producto->nombrellanta ¡Se ha agregado al carrito!");
    }

    public function incrementarItem(Request $request){
        $item = Cart::content()->where("rowId", $request->id)->first();
        Cart::update($request->id, ["qty"=>$item->qty+1]);
        return back()->with("success", "Agregaste una cantidad mas");

    }

    public function decrementarItem(Request $request){
        $item = Cart::content()->where("rowId", $request->id)->first();
        Cart::update($request->id, ["qty"=>$item->qty-1]);
        return back()->with("success", "Se ha restado un producto");

    }

    public function removerItem(Request $request){
        Cart::remove($request->id);
        return back()->with("success", "Removiste un Producto");
    }

    public function eliminarCarrito(){
        Cart::destroy();
        return back()->with("success", "Carrito eliminado");
    }

    public function procesarCarrito(Request $request){
        $siemprehoy = Carbon::now()->toDateString();
        $actualhora = Carbon::now()->isoFormat('H:mm:ss A');

        $pedidoweb = new PedidoWeb();
        $pedidoweb->nombre = $request['c_fname'];
        $pedidoweb->apellido = $request['c_lname'];
        $pedidoweb->compania = $request['c_companyname'];
        $pedidoweb->direccion = $request['c_address'];
        $pedidoweb->estado_pais = $request['c_state_country'];
        $pedidoweb->cp = $request['c_postal_zip'];
        $pedidoweb->email = $request['c_email_address'];
        $pedidoweb->celular = $request['c_phone'];
        $pedidoweb->nota = $request['c_order_notes'];
        $pedidoweb->subtotal = Cart::subtotal();
        $pedidoweb->total = Cart::total();
        $pedidoweb->save();
        session(['PedidoWeb' => $pedidoweb]);

        foreach(Cart::content() as $item)
        {
            $detalle = new DetallesPedidoWeb();
            $detalle->productollanta_id = $item->id;
            $detalle->cantidad = $item->qty;
            $detalle->preciounitario = $item->price;
            $detalle->pedidoweb_id = $pedidoweb->id;
            $detalle->importe = $item->price * $item->qty;
            $detalle->save();


        }
        session(['item' => Cart::content()]);
        Cart::destroy();
        //ReporteCheckoutController::reportePDF();
        return redirect()->route('gracias')->with('succes', 'ECHO');

    }

   /* public function reportePDF()
    {


        $llantas = DB::select('SELECT * FROM detallespedidoweb');
        Header();
        foreach($llantas as $llanta)
        {
            $this->fpdf->cell(60,6,utf8_decode("Cantidad "."-> ".$llanta->cantidad),0,false,'R');
            $this->fpdf->cell(60,6,utf8_decode($llanta->preciounitario),0,false);
            $this->fpdf->cell(60,6,utf8_decode($llanta->importe),0,false);
            $this->fpdf->Ln(4);
        }
        $this->fpdf->Output();

        exit;
    } */
}
