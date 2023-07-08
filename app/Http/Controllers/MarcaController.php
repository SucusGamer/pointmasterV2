<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    /* public function __construct(){
        $this->middleware('can:admin.inicio');
    } */
    public function index()
    {
        $marca = Marca::all();
        return view('admin.marca.index', compact('marca'));
    }

    public function tienda(Request $request)
    {
        $marca = Marca::all()->where('activo', 1);

        return view('sitioweb.tienda', compact('marca'));
    }

    public function create()
    {
        return view('admin.marca.create');
    }

    public function store(Request $request)
    {   
       
        $marca = New Marca();
        if($request->hasFile('txtFile')){
            $imagen = $request->file('txtFile');
            $imagen->move(public_path().'/img/marcas',$imagen->getClientOriginalName());
            $marca->imagen=$imagen->getClientOriginalName();
        }

        $marca->nombremarca = $request['txtNomMarca']; 
        $marca->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($marca->save()){
            return redirect()->route('marca_index')->with('succes', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('marca_create');
        }
    }

    public function edit(Marca $marca, $id)
    {
        $marca = Marca::find($id);

        return view('admin.marca.edit', compact('marca'));
    }

    public function update(Request $request, Marca $marca, $id)
    {   
        $oldfile = false;
        $bd = Marca::find($id);        
        
        if($request->hasFile('txtFile')){
            $imagen = $request->file('txtFile');
            $imagen->move(public_path().'/img/marcas',$imagen->getClientOriginalName());
            $bd->imagen=$imagen->getClientOriginalName();
        }
        
        $bd->nombremarca = $request['txtNomMarca']; 
        $bd->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($bd->save()){
            return redirect()->route('marca_index')->with('success', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('marca_edit', ['id' => $id]);
        }
    }

    
}
