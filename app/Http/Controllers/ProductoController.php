<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class ProductoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        
        return view('cliente.LoginLog')->with([
            'productos' => Productos::all(),
        ]);
    }
    public function crear(){
        $usuario = Auth::user();

        return view('cliente.RegistroProd', ['usuario' => $usuario]);
    }



    public function creacion_prod_usuario(ProductoRequest $request){
        $usuario = Auth::user();
         $producto= Productos::create([
             'nombre' => request()->nombre,
             'descripcion' => request()->descripcion,
             'cantidad' => request()->cantidad,
             'precio' => request()->precio,
             'categoria' => request()->categoria,
             'user_id' => $usuario->id,
         ]);

 
        foreach ($request->images as $image) {
            $producto->images()->create([
                'path' => 'images/' . $image->store('productos', 'images'),
            ]);
        }
        return redirect()->route('producto.index')->withSuccess("El producto {$producto->nombre} ha sido creado");
    }


    public function mostrar(Productos $producto){
       // $productos = Productos::findOrFail($producto);
        return view('cliente.DescProd')->with([
            'productos' => $producto,

        ]);
    }

    public function misproductos($id){

    $usuario = User::find($id);
    $productos = $usuario->productos;

    return view('cliente.misproductos', ['usuario' => $usuario, 'productos' => $productos]);
     }


    public function editar( Productos $producto){
        return view('cliente.EditaProd')->with([
            'producto' => $producto,
        ]);
    }
    public function actualizar(ProductoRequest $request,Productos $producto ){

        //$productos = Productos::findOrFail($producto);
        $producto->update(request()->all());
        return redirect()->route('producto.index')->withSuccess("El producto {$producto->nombre} ha sido actualizado");
    }
    public function eliminar(Productos $producto){
        //$productos = Productos::findOrFail($producto);
        $producto->delete();
        return redirect()->route('producto.index')->withSuccess("El producto {$producto->nombre} ha sido eliminado");
    }
   public function cuenta(){
    $usuario = Auth::user();

    return view('cliente.cuenta', ['usuario' => $usuario]);
   }

   public function misdatos(){
    $usuario = Auth::user();

    return view('cliente.misdatos', ['usuario' => $usuario]);
   }
}
