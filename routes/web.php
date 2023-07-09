<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\LlantaController;
use App\Http\Controllers\CarritoController;

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\DimensionController;
use App\Http\Controllers\NumeroRinController;
use App\Http\Controllers\VentasWebController;
use App\Http\Controllers\PedidosWebController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\CanceladosWebController;
use App\Http\Controllers\Reportes\ReporteCheckoutController;


Route::resource('usuarios', UserController::class)->names('admin.usuarios')->middleware('auth')/*CON ESTO TE PIDE NECESARIAMENTE INICIAR SESIÓN*/;

Route::get('/', function () {
    return view('sitioweb.index');
});

Route::get('/Inicio', function () {
    return view('sitiogestion.inicio');
});

Route::get('/tienda', function () {
    return view('sitioweb.tienda');
});

Route::get('/servicios', function () {
    return view('sitioweb.servicios');
});

Route::get('/contacto', function () {
    return view('sitioweb.contacto');
});

Route::get('/acercade', function () {
    return view('sitioweb.acercade');
});


Route::get('/cart', function () {
    return view('sitioweb.cart');
});

Route::get('/checkout', function () {
    return view('sitioweb.checkout');
})->middleware('auth');

Route::get('/gracias', function () {
    return view('sitioweb.gracias');
});

Route::get('/gracias', [ServicioController::class, 'gracias'])->name('gracias');
Route::get('/contacto', [ContactoController::class, 'contacto'])->name('contacto');


Route::get('/servicios', [ServicioController::class, 'servicioweb'])->name('servicioweb');
Route::get('/', [ServicioController::class, 'indexservicios'])->name('indexservicios');

Route::get('servicio', [ServicioController::class, 'index'])->name('servicio_index')->middleware('can:admin.inicio');

Route::get('servicio/create', [ServicioController::class, 'create'])->name('servicio_create');
Route::post('servicio/store', [ServicioController::class, 'store'])->name('servicio_store');

Route::get('servicio/{id}/edit', [ServicioController::class, 'edit'])->name('servicio_edit')->where('id', '[0-9]+');
Route::post('servicio/{id}/update', [ServicioController::class, 'update'])->name('servicio_update')->where('id', '[0-9]+');

Route::get('categoria', [MarcaController::class, 'index'])->name('marca_index')->middleware('can:admin.inicio');

Route::get('categoria/create', [MarcaController::class, 'create'])->name('marca_create');
Route::post('categoria/store', [MarcaController::class, 'store'])->name('marca_store');

Route::get('categoria/{id}/edit', [MarcaController::class, 'edit'])->name('marca_edit')->where('id', '[0-9]+');
Route::post('categoria/{id}/update', [MarcaController::class, 'update'])->name('marca_update')->where('id', '[0-9]+');


//tipovehiculo
Route::get('familia', [TipoVehiculoController::class, 'index'])->name('tipovehiculo_index');

Route::get('familia/create', [TipoVehiculoController::class, 'create'])->name('tipovehiculo_create');
Route::post('familia/store', [TipoVehiculoController::class, 'store'])->name('tipovehiculo_store');

Route::get('familia/{id}/edit', [TipoVehiculoController::class, 'edit'])->name('tipovehiculo_edit')->where('id', '[0-9]+');
Route::post('familia/{id}/update', [TipoVehiculoController::class, 'update'])->name('tipovehiculo_update')->where('id', '[0-9]+');

//numerorin
Route::get('numerorin', [NumeroRinController::class, 'index'])->name('numerorin_index');
Route::get('listar_areas', [NumeroRinController::class, 'listar_areas'])->name('listar_areas');

Route::get('numerorin/create', [NumeroRinController::class, 'create'])->name('numerorin_create');
Route::post('numerorin/store', [NumeroRinController::class, 'store'])->name('numerorin_store');

Route::get('numerorin/{id}/edit', [NumeroRinController::class, 'edit'])->name('numerorin_edit')->where('id', '[0-9]+');
Route::post('numerorin/{id}/update', [NumeroRinController::class, 'update'])->name('numerorin_update')->where('id', '[0-9]+');

//llantas

Route::get('/tienda', [LlantaController::class, 'llantaweb'])->name('llantaweb');
/* Route::get('/tienda', [LlantaController::class, 'llantascategorias'])->name('llantascategorias'); */

Route::get('/productospormarca', [LlantaController::class, 'productospormarca'])->name('productospormarca');


Route::get('producto', [LlantaController::class, 'index'])->name('llanta_index')->middleware('auth');

Route::get('producto/create', [LlantaController::class, 'create'])->name('llanta_create');
Route::post('producto/store', [LlantaController::class, 'store'])->name('llanta_store');

Route::get('producto/{id}/edit', [LlantaController::class, 'edit'])->name('llanta_edit')->where('id', '[0-9]+');
Route::post('producto/{id}/update', [LlantaController::class, 'update'])->name('llanta_update')->where('id', '[0-9]+');

Route::get('/listar_areas', [LlantaController::class, 'listar_areas'])->name('listar_areas');
Route::get('/cargarfamilias', [LlantaController::class, 'cargarfamilias'])->name('cargarfamilias');


//carrito
Route::post('/agregaritem', [CarritoController::class, 'agregarItem'])->name('agregaritem');

Route::get('/incrementar/{id}', [CarritoController::class, 'incrementarItem'])->name('incrementaritem');
Route::get('/decrementar/{id}', [CarritoController::class, 'decrementarItem'])->name('decrementaritem');
Route::get('/removeritem/{id}', [CarritoController::class, 'removerItem'])->name('removeritem');
Route::get('/eliminarcarrito', [CarritoController::class, 'eliminarCarrito'])->name('eliminarcarrito');
Route::post('/procesarcarrito', [CarritoController::class, 'procesarCarrito'])->name('procesarcarrito');


Route::get('/reportePDF', [ReporteCheckoutController::class, 'reportePDF'])->name('reportePDF'); //Usado de prueba

//pedidos
Route::get('pedidosweb', [PedidosWebController::class, 'index'])->name('pedidosweb_index')->middleware('auth');

Route::post('/pedidoswebentregar', [PedidosWebController::class, 'pedidoswebentregar'])->name('pedidoswebentregar');
Route::post('/pedidoswebcancelar', [PedidosWebController::class, 'pedidoswebcancelar'])->name('pedidoswebcancelar');

Route::get('/showpropedido', [PedidosWebController::class, 'showpropedido'])->name('showpropedido');
//ventas
Route::get('ventasweb', [VentasWebController::class, 'index'])->name('ventasweb_index')->middleware('auth');

//cancelados
Route::get('canceladosweb', [CanceladosWebController::class, 'index'])->name('canceladosweb_index');

//contacto
Route::get('contactoindex', [ContactoController::class, 'index'])->name('contacto_index')->middleware('auth');

Route::post('/guardarcontacto', [ContactoController::class, 'guardarcontacto'])->name('guardarcontacto');
Route::post('/contactovisto', [ContactoController::class, 'contactovisto'])->name('contactovisto');

//dimension
Route::get('grupo', [DimensionController::class, 'index'])->name('dimension_index')->middleware('auth');

Route::get('grupo/create', [DimensionController::class, 'create'])->name('dimension_create');
Route::post('grupo/store', [DimensionController::class, 'store'])->name('dimension_store');

Route::get('grupo/{id}/edit', [DimensionController::class, 'edit'])->name('dimension_edit')->where('id', '[0-9]+');
Route::post('grupo/{id}/update', [DimensionController::class, 'update'])->name('dimension_update')->where('id', '[0-9]+');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
