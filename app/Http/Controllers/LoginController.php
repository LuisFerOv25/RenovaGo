<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    
    public function login(){
        return view('cliente.Login');
    }

    protected function inicioS(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('admin')->attempt($credentials)) {
     
            return redirect()->route('panel.index');
        } elseif (Auth::guard('web')->attempt($credentials)) {
          
            return redirect()->route('producto.index');
        }elseif (Auth::guard('empresa')->attempt($credentials)) {
            
            return redirect()->route('empresa.cuenta');
        }
        
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'Credenciales incorrectas.',
        ]);
    }
    
    
    public function logout(){
        auth()->logout();
        return redirect()->route('cliente.login');
    }
}
