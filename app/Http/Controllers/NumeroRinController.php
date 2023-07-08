<?php

namespace App\Http\Controllers;

use App\Models\NumeroRin;
use App\Models\Tipovehiculo;
use Illuminate\Http\Request;

class NumeroRinController extends Controller
{
    /* public function __construct(){
        $this->middleware('can:admin.inicio');
    } */
    public function index()
    {
        $rin = NumeroRin::all();
        return view('admin.numerorin.index', compact('rin'));
    }

    public function listar_areas()
    {
        $categoria = TipoVehiculo::where('activo',1)->get();
        //$categoria=Familia::all()->where('familia','Puntuales');
        return response()->json(
            $categoria->toArray()
        );
    }


    public function create()
    {
        $tipovehiculo = Tipovehiculo::where('activo', 1)->get();

        return view('admin.numerorin.create', compact('tipovehiculo'));
    }

    public function store(Request $request)
    {   
       
        $rin = New NumeroRin();
       
        $rin->numrin = $request['txtNunRin']; 
        $rin->tipovehiculo_id = $request['txtTipoV'];
        $rin->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($rin->save()){
            return redirect()->route('numerorin_index')->with('succes', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('numerorin_create');
        }
    }

    public function edit(NumeroRin $rin, $id)
    {
        $rin = NumeroRin::find($id);
        $tipovehiculo = TipoVehiculo::where('activo', 1)->get();

        return view('admin.numerorin.edit', compact('rin', 'tipovehiculo'));
    }

    public function update(Request $request, NumeroRin $rin, $id)
    {   
        $oldfile = false;
        $bd = NumeroRin::find($id);        
        
        $bd->numrin = $request['txtNumrin']; 
        $bd->tipovehiculo_id = $request['txtTipoV'];
        $bd->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($bd->save()){
            return redirect()->route('numerorin_index')->with('success', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('numerorin_edit', ['id' => $id]);
        }
    }

    
}
