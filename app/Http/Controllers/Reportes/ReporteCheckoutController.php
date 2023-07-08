<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Cart;
use Codedge\Fpdf\Fpdf\Fpdf;

class ReporteCheckoutController extends Controller
{
    public static function reportePDF()
    {
        session('PedidoWeb');
        $siemprehoy = Carbon::now()->toDateString();
        $actualhora = Carbon::now()->isoFormat('H:mm:ss A');

        $fpdf = new headerfooter('L','mm',array(140,140));  //Media Carta
        $fpdf->AliasNbPages();
        $fpdf->AddPage();
        $fpdf->SetFont('Arial','B', 7);
        $fpdf->Cell(60,6, utf8_decode("Datos del usuario:"),0, false);
        $fpdf->Ln();
        $fpdf->SetFont('Arial','B',6);
        $fpdf->cell(60,6,utf8_decode("Nombre".": ". session('PedidoWeb')->nombre),0,false);
        $fpdf->Ln();
        $fpdf->cell(60,6,utf8_decode("Apellido".": ". session('PedidoWeb')->apellido),0,false);
        $fpdf->Ln();
        $fpdf->cell(60,6,utf8_decode("Email ".": ". session('PedidoWeb')->email),0,false);
        $fpdf->Ln();
        //Productos
        $fpdf->SetX(20);
        $fpdf->SetFont('Arial','I',10);
        $fpdf->Cell(100,10,'Productos Pedidos', 1, 0, 'C');
        $fpdf->Ln();
        $fpdf->SetX(20);
        $fpdf->SetFont('Arial','I',10);
        $fpdf->Cell(50,10,'Producto',1);
        $fpdf->Cell(20,10,'Cantidad',1);
        $fpdf->Cell(30,10,'Precio',1);
        $fpdf->Ln();

        foreach (session('item') as $item)
        {
            $fpdf->SetX(20);
            $fpdf->Cell(50,10,$item->name,1);
            $fpdf->Cell(20,10,$item->qty,1);
            $fpdf->Cell(30,10,$item->price,1);
            $fpdf->Ln();
        }
        $fpdf->SetX(40);
        $fpdf->Cell(30,10,"Subtotal ".": ".session('PedidoWeb')->subtotal,0);
        $fpdf->Ln(5);
        $fpdf->SetX(40);
        $fpdf->Cell(30,10,"Total ".": ".session('PedidoWeb')->total,0);
        $fpdf->Ln(8);
        $fpdf->SetX(40);
        $fpdf->Cell(30,10,"Nota ".": ".session('PedidoWeb')->nota,0);

        //session(['PedidoWeb' => ""]);
        //session(['item' => ""]);
        $fpdf->Output();
        //exit;
    }

}
