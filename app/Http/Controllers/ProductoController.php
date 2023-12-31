<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\Pago;
use App\Models\User;
use App\Services\CarritoService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductoController extends Controller
{
    public $carritoService;

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $productos = Productos::paginate(20);
        return view('cliente.LoginLog',compact('productos'));
    }
    public function crear(){
        $usuario = Auth::user();

        return view('cliente.RegistroProd', ['usuario' => $usuario]);
    }



    public function creacion_prod_usuario(ProductoRequest $request){
        $usuario = Auth::user();

        $validator = Validator::make(request()->all(), [
            'nombre' => 'required|max:120',
            'descripcion' => 'required|string|max:255',
            'cantidad' => 'required|integer',
            'precio' => 'required',
            'categoria' => 'required',
            'images' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('producto.crear')
                ->withErrors($validator)
                ->withInput();
        }
                
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
        return redirect()->route('cliente.cuenta')->withSuccess("El producto {$producto->nombre} ha sido creado");
    }


    public function mostrar(Productos $producto){
       // $productos = Productos::findOrFail($producto);
        return view('cliente.DescProd')->with([
            'productos' => $producto,

        ]);
    }

    public function todosmisprod($id){
   
        $usuario = User::find($id);
        $productos = $usuario->productos;
    
        return view('cliente.misproductos', ['usuario' => $usuario, 'productos' => $productos]);
    }

    public function misproductos($id,$categoria){
   
    $usuario = User::find($id);
    $productos = $usuario->productos->where('categoria', $categoria);

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
   public function obtenerPedidosDeProducto(Productos $producto)
   {
       // Obtener los IDs de las órdenes que contienen el producto específico
       $idsOrdenes = $producto->ordens()->pluck('id');
   
       // Obtener los pagos asociados a esas órdenes
       $pagos = Pago::whereIn('id_orden', $idsOrdenes)->get();
   
       // Ahora, $pagos contiene los pagos asociados al producto
       return $pagos;
   }
   public function pedido(Productos $producto){
    return view('cliente.pedidos')->with([
        'productos' => $producto,
    ]);
  
}
}
