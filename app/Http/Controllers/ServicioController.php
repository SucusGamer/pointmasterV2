<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    
    public function index()
    {
        $servicios = Servicio::all();

        return view('admin.servicio.index', compact('servicios'));
    }

    public function servicioweb()
    {
        $servicios = Servicio::all()->where('activo', 1);

        return view('sitioweb.servicios', compact('servicios'));
    }

    public function gracias()
    {
        return view('sitioweb.gracias');

    }

    public function indexservicios()
    {
        $servicio = Servicio::all()->where('activo', 1);

        return view('sitioweb.index', compact('servicio'));
    }

    public function create()
    {
        
        return view('admin.servicio.create');
    }

    public function store(Request $request)
    {   
       
        $servicio = New Servicio();
        if($request->hasFile('txtFile')){
            $imagen = $request->file('txtFile');
            $imagen->move(public_path().'/img/servicios',$imagen->getClientOriginalName());
            $servicio->imagen=$imagen->getClientOriginalName();
        }

        $servicio->nombreservicio = $request['txtNomServicio']; 
        $servicio->descripcionservicio = $request['txtDescripcionServicio'];
        $servicio->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($servicio->save()){
            return redirect()->route('servicio_index')->with('succes', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('servicio_create');
        }
    }

    public function edit(Servicio $servicio, $id)
    {
        $servicio = Servicio::find($id);

        return view('admin.servicio.edit', compact('servicio'));
    }

    public function update(Request $request, Servicio $servicio, $id)
    {   
        $oldfile = false;
        $bd = Servicio::find($id);        
        
        if($request->hasFile('txtFile')){
            $imagen = $request->file('txtFile');
            $imagen->move(public_path().'/img/servicios',$imagen->getClientOriginalName());
            $bd->imagen=$imagen->getClientOriginalName();
        }
        
        $bd->nombreservicio = $request['txtNomServicio']; 
        $bd->descripcionservicio = $request['txtDescripcionServicio'];
        $bd->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($bd->save()){
            return redirect()->route('servicio_index')->with('success', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('servicio_edit', ['id' => $id]);
        }
    }

}
