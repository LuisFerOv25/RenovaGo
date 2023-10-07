<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerfilRequest;
use App\Models\User;
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
            'image' => 'required'
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

}
