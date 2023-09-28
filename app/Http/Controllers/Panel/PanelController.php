<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductoRequest;
use App\Models\Empresa;
use App\Models\Productos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function usuario()
    {
        $usuarios = User::all();
        
        return view('admin.usuarios_admin', [
            'usuarios' => $usuarios,
        ]);
    }

    public function empresa()
    {
        $empresa = Empresa::all();
        return view('admin.empresas_admin')->with([
            'empresas' => $empresa,

        ]);
    }

    public function producto()
    {
        $productos = Productos::with('categoria')->get();
        return view('admin.productos_admin', compact('productos'));
    }
    public function editar( Productos $producto){
        return view('admin.edita_prod')->with([
            'producto' => $producto,
        ]);
    }
    public function actualizar(ProductoRequest $request,Productos $producto ){

        //$productos = Productos::findOrFail($producto);
        $producto->update(request()->all());
        return redirect()->route('panel.producto')->withSuccess("El producto {$producto->nombre} ha sido actualizado");
    }
    public function eliminar(Productos $producto){

        try {

        $producto->delete();
 
        return redirect()->route('panel.producto')->withSuccess("El producto {$producto->nombre} ha sido eliminado");
        }catch(QueryException $e) {
            return redirect()->route('panel.producto')->withWarning("No se pudo eliminar el producto {$producto->nombre} debido a restricciones de clave externa.");
         }
    }



    public function editarUser( User $usuario){
        return view('admin.edita_user')->with([
            'usuario' => $usuario,
        ]);
    }
    public function actualizarUser(User $usuario ){

        //$productos = Productos::findOrFail($producto);
        $usuario->update(request()->all());
        return redirect()->route('panel.usuario')->withSuccess("El usuario {$usuario->nombre} ha sido actualizado");
    }
    public function eliminar_user(User $usuario){

        try {

        $usuario->delete();
 
        return redirect()->route('panel.usuario')->withSuccess("El usuario {$usuario->nombre} ha sido eliminado");
        }catch(QueryException $e) {
            return redirect()->route('panel.usuario')->withWarning("No se pudo eliminar el usuario {$usuario->nombre} debido a restricciones de clave externa.");
         }
    }

    public function editarEmpr( Empresa $empresa){
        return view('admin.edita_empr')->with([
            'empresa' => $empresa,
        ]);
    }

    public function actualizarEmpr(Empresa $empresa ){

        //$productos = Productos::findOrFail($producto);
        $empresa->update(request()->all());
        return redirect()->route('panel.empresa')->withSuccess("La empresa {$empresa->nombre} ha sido actualizada");
    }

    public function eliminar_empr(Empresa $empresa){

        try {

        $empresa->delete();
 
        return redirect()->route('panel.empresa')->withSuccess("la empresa {$empresa->nombre} ha sido eliminado");
        }catch(QueryException $e) {
            return redirect()->route('panel.empresa')->withWarning("No se pudo eliminar la empresa {$empresa->nombre} debido a restricciones de clave externa.");
         }
    }
    
}
