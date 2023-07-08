<?php

namespace App\Http\Controllers\Reportes;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Codedge\Fpdf\Fpdf\Fpdf;

class headerfooter extends Fpdf
{

    // Cabecera de página
    function Header()
    {
        $siemprehoy = Carbon::now()->toDateString();
        $actualhora = Carbon::now()->isoFormat('H:mm:ss A');
        // Logo
        $this->Image('images/iconomaster.png',120,8,14);

        $this->SetFont('Arial','B',15);
        $this->Cell(0, 10, "Detalle del Pedido", 0, 0, 'C');
        $this->Ln(5);
        $this->SetFont('Arial','',6);
        $this->SetX(-15);
        $this->Cell(1, 30, 'Fecha:'.' '.$siemprehoy, 0, 0, 'C');
        $this->Ln(8);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        //$this->SetFont('Arial','I',8);
        $this->Image('images/logomaster.png',110,125,20);
        $this->SetFont('Arial','B',6);
        // Número de página
        $this->Cell(20,10,'Page '.$this->PageNo().'/{nb}',0,0,'L');
        $this->Cell(0, 10, utf8_decode('FLAG Desarrolladores ©2023'), 0, 0, 'C');
    }

}
