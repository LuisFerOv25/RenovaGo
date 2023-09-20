<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\Usuarios;
class LoginController extends Controller
{

    
    public function login(){
        return view('cliente.Login');
    }
    public function inicioS(){
        if(auth()->attempt(request(['email','password'])) == false) {
            return back()->withErrors([
                'message'=> 'El correo o la contraseña son invalidos, verifica los datos'
            ]);
        }
        return redirect()->route('producto.index');
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('cliente.login');
    }
}
