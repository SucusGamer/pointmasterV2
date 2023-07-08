<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Llanta;
use App\Models\Dimension;
use App\Models\NumeroRin;

use App\Models\TipoVehiculo;
use Illuminate\Http\Request;

class DimensionController extends Controller
{
    /* public function __construct(){
        $this->middleware('can:admin.inicio');
    } */
    public function index()
    {
        
        $dimension = Dimension::all();

        return view('admin.dimension.index', compact('dimension'));
    }

    public function llantaweb(Request $request)
    {
        $buscarpornombre = $request->buscarnombre;
        $buscarpormarca = $request->marca;
        $buscarporvehiculo = $request->tipovehiculo;
        $buscarporrin = $request->rin;

        $marca = $request->get('marca_id');
        $marcas = Marca::all()->where('activo', 1);
        $tipo = TipoVehiculo::all()->where('activo', 1);
        $rin = NumeroRin::all()->where('activo', 1);

        $llantas = Llanta::where('activo', 1)
            ->where('nombrellanta','LIKE','%'.$buscarpornombre.'%')
            ->where('marca_id','LIKE','%'.$buscarpormarca.'%')
            ->where('tipovehiculo_id','LIKE','%'.$buscarporvehiculo.'%')
            ->where('numrin_id','LIKE','%'.$buscarporrin.'%')
            ->get();

        $marca = Marca::where('activo', 1)->get();
        return view('sitioweb.tienda', compact('llantas', 'marca','marcas', 'buscarpornombre', 'tipo', 'rin'));
    }

    public function create()
    {
        $numerorin = NumeroRin::where('activo', 1)->get();

        return view('admin.dimension.create', compact( 'numerorin'));
    }

    public function productospormarca(Request $request, Marca $id)
    {
        $marca = Marca::find($id);

        return view('sitioweb.tienda', compact('marca'));
    }
    public function store(Request $request)
    {   
       
        $dimension = New Dimension();

        $dimension->dimension = $request['txtNomLlanta']; 
        $dimension->numrin_id = $request['txtNumRim']; 
        
        $dimension->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($dimension->save()){
            return redirect()->route('dimension_index')->with('succes', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('dimension_create');
        }
    }

    public function edit(Dimension $dimension, $id)
    {
        $dimension = Dimension::find($id);

        $numerorin = NumeroRin::where('activo', 1)->get();

        return view('admin.dimension.edit', compact('dimension', 'numerorin'));
    }

    public function update(Request $request, Dimension $dimension, $id)
    {   
        $oldfile = false;
        $bd = Dimension::find($id);    

        $bd->dimension = $request['txtNomLlanta']; 
        $bd->numrin_id = $request['txtNumRim']; 

        $bd->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($bd->save()){
            return redirect()->route('dimension_index')->with('success', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('dimension_edit', ['id' => $id]);
        }
    }

    
}
