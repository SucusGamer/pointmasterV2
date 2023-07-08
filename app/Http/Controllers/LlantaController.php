<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Llanta;
use App\Models\Dimension;
use App\Models\NumeroRin;

use App\Models\TipoVehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LlantaController extends Controller
{
    /* public function __construct(){
        $this->middleware('can:admin.inicio');
    } */
    public function index()
    {

        $llanta = Llanta::all();

        return view('admin.llanta.index', compact('llanta'));
    }

    public function listar_areas()
    {
        //$categoria=Categoria::all()->where('activo',1);
        $categoria =
            DB::table('tipovehiculo')
                ->where('activo', 1)
                ->get();
        //$categoria=Familia::all()->where('familia','Puntuales');
        return response()->json(
            $categoria->toArray()
        );
    }

    public function cargarfamilias(Request $request)
    {

        $txtCategoria=Input::get('txtCategoria');

        $familia=NumeroRin::all()->where('activo',1)->where('tipovehiculo_id',$txtCategoria);
        //$familia=Familia::all()->where('activo',1)->where('id_categoria',1);
        //$familia=Familia::all()->where('activo',1);
        //$familia=Familia::all()->where('familia','Puntuales');


        /*$familia =
            DB::table('familia')
                ->select('familia.*')
                ->where('familia.activo', 1)
                ->get();*/

        $familia =
            DB::table('numerorin')
                ->select('numerorin.*')
                ->where('numerorin.activo', 1)
                ->where('numerorin.tipovehiculo_id', $txtCategoria)
                ->get();
        //hacerlo en forma de query ya que si pongo Familia::all(), muestra undefined en el console.log

        return response()->json(
            $familia->toArray()
        );

    }

    public function llantaweb(Request $request)
    {
        $buscarpornombre = $request->buscarnombre;
        $buscarpormarca = $request->marca;
        $buscarporvehiculo = $request->tipovehiculo;
        $buscarporrin = $request->rin;
        $buscarpordimension = $request->dimensiones;

        $marca = $request->get('marca_id'); //No se que estabas haciendo
        $marcas = Marca::all()->where('activo', 1);
        $tipo = TipoVehiculo::all()->where('activo', 1);
        //$rin = NumeroRin::all()->where('activo', 1);





        $rines = NumeroRin::where('activo', 1)
            ->where('tipovehiculo_id','LIKE','%'.$buscarporvehiculo.'%')  //Así que me hice otras variables
            ->get();
        $dimensiones = Dimension::where('activo', 1)
        ->where('numrin_id','LIKE','%'.$buscarporrin.'%')  //Así que me hice otras variables
        ->get();

            $llantas = Llanta::where('activo', 1)
            ->where('nombrellanta','LIKE','%'.$buscarpornombre.'%')
            ->where('marca_id','LIKE','%'.$buscarpormarca.'%')
            ->where('dimension_id','LIKE','%'.$buscarpordimension.'%')
            ->get();


        $marca = Marca::where('activo', 1)->get();
        return view('sitioweb.tienda', compact('llantas',  'dimensiones','marca','marcas', 'buscarpornombre', 'tipo', 'rines'));
    }

    /* public function llantascategorias(Request $request)
    {
        $buscarpornombre = $request->buscarnombre;
        $buscarpormarca = $request->marca;
        $buscarporvehiculo = $request->tipovehiculo;
        $buscarporrin = $request->rin;
        $buscarpordimension = $request->dimensiones;

        $marca = $request->get('marca_id');
        $marcas = Marca::all()->where('activo', 1);
        $tipo = TipoVehiculo::all()->where('activo', 1);
        $rin = NumeroRin::all()->where('activo', 1);

        $llantas = Llanta::where('activo', 1)
            ->where('nombrellanta','LIKE','%'.$buscarpornombre.'%')
            ->where('marca_id','LIKE','%'.$buscarpormarca.'%')
            ->get();



        $marca = Marca::where('activo', 1)->get();
        return view('sitioweb.tienda', compact('llantas', 'marca','marcas', 'buscarpornombre', 'tipo', 'rin'));
    } */

    public function create()
    {
        $marca = Marca::where('activo', 1)->get();
        $dimension = Dimension::where('activo', 1)->get();

        return view('admin.llanta.create', compact('marca', 'dimension'));
    }

    public function productospormarca(Request $request, Marca $id)
    {
        $marca = Marca::find($id);

        return view('sitioweb.tienda', compact('marca'));
    }
    public function store(Request $request)
    {

        $llanta = New Llanta();
        if($request->hasFile('txtFile')){
            $imagen = $request->file('txtFile');
            $imagen->move(public_path().'/img/llantas',$imagen->getClientOriginalName());
            $llanta->imagen=$imagen->getClientOriginalName();
        }

        $llanta->nombrellanta = $request['txtNomLlanta'];
        $llanta->marca_id = $request['txtNomMarca'];
        $llanta->dimension_id = $request['txtNumRim'];
        $llanta->precio = $request['txtPrecio'];
        $llanta->descripcion = $request['txtDescripcion'];


        $llanta->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;

        if($llanta->save()){
            return redirect()->route('llanta_index')->with('succes', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('llanta_create');
        }
    }

    public function edit(Llanta $llanta, $id)
    {
        $llanta = Llanta::find($id);

        $marca = Marca::where('activo', 1)->get();
        $tipovehiculo = TipoVehiculo::where('activo', 1)->get();
        $dimension = Dimension::where('activo', 1)->get();

        return view('admin.llanta.edit', compact('llanta', 'marca', 'dimension'));
    }

    public function update(Request $request, Llanta $llanta, $id)
    {
        $oldfile = false;
        $bd = Llanta::find($id);

        if($request->hasFile('txtFile')){
            $imagen = $request->file('txtFile');
            $imagen->move(public_path().'/img/llantas',$imagen->getClientOriginalName());
            $bd->imagen=$imagen->getClientOriginalName();
        }
        $bd->nombrellanta = $request['txtNomLlanta'];
        $bd->marca_id = $request['txtNomMarca'];
        $bd->dimension_id = $request['txtNumRim'];
        $bd->precio = $request['txtPrecio'];
        $bd->descripcion = $request['txtDescripcion'];

        $bd->activo = $request['chkActivo'] ? $request['chkActivo'] : 0;
        if($bd->save()){
            return redirect()->route('llanta_index')->with('success', 'Registro Creado satisfactoriamente');
        }else{
            return redirect()->route('llanta_edit', ['id' => $id]);
        }
    }


}
