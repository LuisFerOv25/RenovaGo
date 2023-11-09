<?php

use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegistrerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoCarritoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('descargas', 'App\Http\Controllers\HomeController@descargas')->name('home.descargas');
Route::get('cuenta/{usuario}/productos', 'App\Http\Controllers\ProductoController@todosmisprod')->name('producto.todosmisprod');
Route::get('cuenta/{usuario}/{categoria}/productos', 'App\Http\Controllers\ProductoController@misproductos')->name('producto.misproductos');


Route::get('/cuenta', 'App\Http\Controllers\ProductoController@Cuenta')->name('cliente.cuenta');
Route::get('/misdatos', 'App\Http\Controllers\ProductoController@misdatos')->name('cliente.misdatos');
Route::delete('/misdatos/{usuario}','App\Http\Controllers\RegistrerController@destroyimage')->name('misdatos.usuario.eliminar');
Route::post('/usuario/{usuario}/agregar-imagen', 'App\Http\Controllers\RegistrerController@agregarImagen')->name('usuario.agregar-imagen');



Route::get('producto', 'App\Http\Controllers\ProductoController@index')->name('producto.index');

Route::get('producto/crear','App\Http\Controllers\ProductoController@crear')->name('producto.crear');

Route::post('producto','App\Http\Controllers\ProductoController@creacion_prod_usuario')->name('producto.creacion_prod');

Route::get('producto/descripcion/{producto}', 'App\Http\Controllers\ProductoController@mostrar')->name('producto.mostrar');
Route::get('producto/pedidos','App\Http\Controllers\ProductoController@pedido')->name('producto.pedido');

//#####

Route::get('producto/{producto}/editar','App\Http\Controllers\ProductoController@editar')->name('producto.editar');

Route::resource('producto.carrito','App\Http\Controllers\ProductoCarritoController')->only(['store','destroy']);

Route::match(['put','patch'],'producto/{producto}','App\Http\Controllers\ProductoController@actualizar')->name('producto.actualizar');

Route::delete('producto/{producto}','App\Http\Controllers\ProductoController@eliminar')->name('producto.eliminar');

Route::get('registro', 'App\Http\Controllers\RegistrerController@registro')->name('cliente.registro');

Route::post('registro', 'App\Http\Controllers\RegistrerController@autenticar')->name('cliente.autenticar');

Route::get('login', 'App\Http\Controllers\LoginController@login')->name('cliente.login');
Route::post('login', 'App\Http\Controllers\LoginController@inicioS')->name('cliente.inicioS');

Route::post('logout', 'App\Http\Controllers\LoginController@logout')->name('cliente.logout');

Route::resource('carrito','App\Http\Controllers\CarritoController')->only(['index']);

Route::resource('orden','App\Http\Controllers\OrdenController')->only(['create','store']);

Route::resource('orden.pago','App\Http\Controllers\OrdenPagoController')->only(['create','store']);

 Route::middleware(['admin.auth'])->group(function () {

    Route::resource('panel','App\Http\Controllers\Panel\PanelController')->only(['index']);

    Route::get('panel/usuario', 'App\Http\Controllers\Panel\PanelController@usuario')->name('panel.usuario');

    Route::get('panel/empresa', 'App\Http\Controllers\Panel\PanelController@empresa')->name('panel.empresa');

    Route::get('panel/admin/registro', 'App\Http\Controllers\AdminController@registro')->name('panel.registro.admin');

    Route::post('panel/admin/registro', 'App\Http\Controllers\AdminController@autenticar')->name('panel.autenticar.admin');

    //producto
    Route::get('panel/producto', 'App\Http\Controllers\Panel\PanelController@producto')->name('panel.producto');
    Route::delete('panel/producto/{producto}','App\Http\Controllers\Panel\PanelController@eliminar')->name('panel.prod.eliminar');

    Route::get('panel/producto/{producto}/editar', 'App\Http\Controllers\Panel\PanelController@editar')->name('panel.prod.editar');

    Route::match(['put', 'patch'], 'panel/producto/{producto}', 'App\Http\Controllers\Panel\PanelController@actualizar')->name('panel.prod.actualizar');


    //usuario
    Route::get('panel/usuario/{usuario}/editar', 'App\Http\Controllers\Panel\PanelController@editarUser')->name('panel.user.editar');

    Route::match(['put', 'patch'], 'panel/usuario/{usuario}', 'App\Http\Controllers\Panel\PanelController@actualizarUser')->name('panel.user.actualizar');
    Route::delete('panel/usuario/{usuario}','App\Http\Controllers\Panel\PanelController@eliminar_user')->name('panel.user.eliminar');


    //empresa
    Route::get('panel/empresa/{empresa}/editar', 'App\Http\Controllers\Panel\PanelController@editarEmpr')->name('panel.empr.editar');

    Route::match(['put', 'patch'], 'panel/empresa/{empresa}', 'App\Http\Controllers\Panel\PanelController@actualizarEmpr')->name('panel.empr.actualizar');
    Route::delete('panel/empresa/{empresa}','App\Http\Controllers\Panel\PanelController@eliminar_empr')->name('panel.empr.eliminar');

    //Admin

    Route::get('panel/admin', 'App\Http\Controllers\AdminController@mostrarAdmin')->name('panel.admin');
    Route::get('panel/admin/{admin}/editar', 'App\Http\Controllers\AdminController@editarAdmin')->name('panel.adm.editar');
    Route::match(['put', 'patch'], 'panel/admin/{admin}', 'App\Http\Controllers\AdminController@actualizarAdmin')->name('panel.adm.actualizar');
    Route::delete('panel/admin/{admin}','App\Http\Controllers\AdminController@eliminarAdmin')->name('panel.adm.eliminar');

    Route::post('panel/logout', 'App\Http\Controllers\AdminController@logout')->name('admin.logout');


 });

//rutas para la empresa
Route::get('registro/empresa', 'App\Http\Controllers\EmpresaController@registro')->name('empresa.registro');
Route::post('registro/empresa', 'App\Http\Controllers\EmpresaController@creacion_empr')->name('empresa.creacion_empr');

Route::middleware(['empresa.auth'])->group(function () {

    Route::get('cuenta/empresa/{empresa}/{categoria}/productos', 'App\Http\Controllers\EmpresaController@misproductosempr')->name('empresa.misproductosempr');
    Route::get('cuenta/empresa/{empresa}/productos', 'App\Http\Controllers\EmpresaController@todosmisprodempr')->name('empresa.todosmisprodempr');
    Route::get('/cuenta/empresa', 'App\Http\Controllers\EmpresaController@micuenta')->name('empresa.cuenta');
    Route::get('/misdatos/empresa', 'App\Http\Controllers\EmpresaController@misdatos')->name('empresa.misdatos');
    Route::post('cuenta/empresa/logout', 'App\Http\Controllers\EmpresaController@logout')->name('empresa.logout');
    Route::post('cuenta/empresa/producto','App\Http\Controllers\EmpresaController@creacion_prod_empresa')->name('producto.creacion_prod_empr');
    Route::get('cuenta/empresa/producto/crear','App\Http\Controllers\EmpresaController@crearProdEmpresa')->name('producto.crearEmpresa');
});

