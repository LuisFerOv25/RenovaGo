<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Empresa;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:empresa')->except(['registro','creacion_empr']);
    }

    public function registro()
    {
        return view('empresa.registroempr');
    }
    public function creacion_empr(Request $request){
        $validator = Validator::make(request()->all(), [
            'nit' => Rule::unique('empresas'),
            'nombre' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('empresas'), 
            ],
            'password' => 'required|string|min:8|confirmed', 
            'images' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('empresa.registro')
                ->withErrors($validator)
                ->withInput();
        }

        $empresa = Empresa::create(request()->all());
        auth()->login($empresa);
        foreach ($request->images as $image) {
            $empresa->image()->create([
                'path' => 'images/' . $image->store('empresas', 'images'),
            ]);
        }
       return redirect()->to('/registro/empresa')->withSuccess('Empresa registrada con éxito');
    }

    public function micuenta(){
        $empresa = Auth::guard('empresa')->user();
    
        return view('empresa.micuenta', ['empresa' => $empresa]);
    }

    public function misdatos(){
        $empresa = Auth::guard('empresa')->user();
       
        return view('empresa.misdatos', ['empresa' => $empresa]);
       }

       public function todosmisprodempr($id){
   
        $empresa = Empresa::find($id);
        $productos = $empresa->productos;
    
        return view('empresa.misproductos', ['empresa' => $empresa, 'productos' => $productos]);
    }

    public function misproductosempr($id,$categoria){
   
    $empresa = Empresa::find($id);
    $productos = $empresa->productos->where('categoria', $categoria);

    return view('empresa.misproductos', ['empresa' => $empresa, 'productos' => $productos]);
     }
    public function logout(){
        Auth::guard('empresa')->logout();

        return redirect()->route('cliente.login');
    }

    public function crearProdEmpresa(){
        $empresa = Auth::user();

        return view('empresa.RegistroProd', ['empresa' => $empresa]);
    }
    public function creacion_prod_empresa(ProductoRequest $request)
    {
        // Verificar si el usuario autenticado es un administrador
        if (Auth::guard('empresa')->check()) {
            $empresa = Auth::guard('empresa')->user();

            $validator = Validator::make(request()->all(), [
                'nombre' => 'required|max:120',
                'descripcion' => 'required|string|max:255',
                'cantidad' => 'required|integer',
                'precio' => 'required',
                'categoria' => 'required',
                'images' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->route('producto.crearEmpresa')
                    ->withErrors($validator)
                    ->withInput();
            }

            $producto = Productos::create([
                'nombre' => request()->nombre,
                'descripcion' => request()->descripcion,
                'cantidad' => request()->cantidad,
                'precio' => request()->precio,
                'categoria' => request()->categoria,
                'empresa_id' => $empresa->id,
            ]);
    
            foreach ($request->images as $image) {
                $producto->images()->create([
                    'path' => 'images/' . $image->store('productos', 'images'),
                ]);
            }
    
            return redirect()->route('empresa.cuenta')->withSuccess("El producto {$producto->nombre} ha sido creado");
        }
    
        // Manejar el caso en el que el usuario no sea un administrador
        return redirect()->route('empresa.cuenta')->withError("No tienes permisos para crear productos.");
    }
}
