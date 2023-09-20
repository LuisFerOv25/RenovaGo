<?php

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


 Route::get('/cuenta', 'App\Http\Controllers\ProductoController@Cuenta')->name('cliente.cuenta');
 Route::get('/misdatos', 'App\Http\Controllers\ProductoController@misdatos')->name('cliente.misdatos');



Route::get('producto', 'App\Http\Controllers\ProductoController@index')->name('producto.index')->middleware('auth');

Route::get('producto/crear','App\Http\Controllers\ProductoController@crear')->name('producto.crear');

Route::post('producto','App\Http\Controllers\ProductoController@creacion_prod')->name('producto.creacion_prod');

Route::get('producto/descripcion/{producto}', 'App\Http\Controllers\ProductoController@mostrar')->name('producto.mostrar');

//rutas para la empresa

Route::get('registro/empresa', 'App\Http\Controllers\EmpresaController@registro')->name('empresa.registro');

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

//Rutas de admin

Route::resource('panel','App\Http\Controllers\Panel\PanelController')->only(['index']);

Route::get('panel/usuario', 'App\Http\Controllers\Panel\PanelController@usuario')->name('panel.usuario');

Route::get('panel/empresa', 'App\Http\Controllers\Panel\PanelController@empresa')->name('panel.empresa');

//producto
Route::get('panel/producto', 'App\Http\Controllers\Panel\PanelController@producto')->name('panel.producto');
Route::delete('panel/producto/{producto}','App\Http\Controllers\Panel\PanelController@eliminar')->name('panel.prod.eliminar');

Route::get('panel/admin', 'App\Http\Controllers\Panel\PanelController@admin')->name('panel.admin');

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
