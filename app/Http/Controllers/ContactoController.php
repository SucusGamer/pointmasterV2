<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function guardarcontacto(Request $request)
    {
        $contacto = New Contacto();
        $contacto->nombre = $request['fname']; 
        $contacto->apellido = $request['lname']; 
        $contacto->correo = $request['email']; 
        $contacto->mensaje = $request['message'];
        $contacto->activo = 0; 
        if($contacto->save()){
            return redirect()->route('contacto')->with('succes', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('contacto');
        }
    }

    public function contacto()
    {
        return view('sitioweb.contacto');

    }

    public function index()
    {
        $contacto = Contacto::all()->where('activo', 0);
        return view('admin.contacto.index', compact('contacto'));
    }

    public function contactovisto(Request $request)
    {
        $contacto = contacto::find($request->producto_id);
        $contacto->activo = 1;
        $contacto->save();

        return back()->with("success","$contacto->id ¡Se ha cancelado el Pedido!");
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
