<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerfilRequest;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegistrerController extends Controller
{
    public function registro(){
        return view('cliente.RegistroUser');
    }
    public function autenticar(PerfilRequest $request){
        $validator = Validator::make(request()->all(), [
            'cedula' => Rule::unique('users'),
            'nombre' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users'),
            ],
            'password' => 'required|string|min:8|confirmed',
            'images' => 'required'
        ]);
        if ($validator->fails()) {
            // Si la validación falla, redirige de nuevo al formulario con los errores
            return redirect()->route('cliente.registro')
                ->withErrors($validator)
                ->withInput();
        }
        
        $usuario = User::create(request()->all());
        auth()->login($usuario);
        foreach ($request->images as $image) {
            $usuario->image()->create([
                'path' => 'images/' . $image->store('usuarios', 'images'),
            ]);
        }
       return redirect()->to('/registro')->withSuccess('Usuario creado con exito');
    }
    public function destroyimage(User $usuario){

        try {
            if ($usuario->image) {
                $image = $usuario->image;
    
                $image->delete();
    
                $usuario->image()->update(['user_id' => null]);
    
                return redirect()->route('cliente.misdatos')->withSuccess("Imagen eliminada");
            } else {
                return redirect()->route('cliente.misdatos')->withWarning("El usuario no tiene una imagen asociada");
            }
        } catch (QueryException $e) {
            return redirect()->route('cliente.misdatos')->withWarning("No se pudo eliminar la imagen");
        }
    }
    
    public function agregarImagen(Request $request, User $usuario)
{

    $validator = Validator::make($request->all(), [
        'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta las reglas según tus necesidades
    ]);

    if ($validator->fails()) {
        return redirect()->route('cliente.misdatos')->withErrors($validator);
    }


    $imagen = $request->file('imagen');
    $path = 'images/' . $imagen->store('usuarios', 'images');

    $usuario->image()->create([
        'path' => $path,
    ]);

    return redirect()->route('cliente.misdatos')->withSuccess('Imagen agregada con éxito');
}
    
    
    
}
