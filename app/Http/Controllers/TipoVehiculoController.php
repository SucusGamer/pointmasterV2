<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipovehiculo;

class TipoVehiculoController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.inicio');
    }
    public function index()
    {
        $vehiculo = Tipovehiculo::all();
        return view('admin.tipovehiculo.index', compact('vehiculo'));
    }

    public function create()
    {
        return view('admin.tipovehiculo.create');
    }

    public function store(Request $request)
    {   
       
        $vehiculo = New Tipovehiculo();
       
        $vehiculo->vehiculo = $request['txtNomVehiculo']; 
        $vehiculo->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($vehiculo->save()){
            return redirect()->route('tipovehiculo_index')->with('succes', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('tipovehiculo_create');
        }
    }

    public function edit(Tipovehiculo $vehiculo, $id)
    {
        $vehiculo = Tipovehiculo::find($id);

        return view('admin.tipovehiculo.edit', compact('vehiculo'));
    }

    public function update(Request $request, Tipovehiculo $vehiculo, $id)
    {   
        $oldfile = false;
        $bd = Tipovehiculo::find($id);        
        
        $bd->vehiculo = $request['txtNomVehiculo']; 
        $bd->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($bd->save()){
            return redirect()->route('tipovehiculo_index')->with('success', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('tipovehiculo_edit', ['id' => $id]);
        }
    }

    
}
