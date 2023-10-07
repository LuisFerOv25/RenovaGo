<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Database\QueryException;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    } 
    
    public function mostrarAdmin()
    {
        $admins = Admin::all();
        
        return view('admin.adm_admin', [
            'admin' => $admins,
        ]);
    }


    public function registro(){
        return view('admin.regadmin');
    }
    public function autenticar(Request $request){
        $validator = Validator::make(request()->all(), [
            'cedula' => Rule::unique('admins'),
            'nombre' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('admins'), 

            ],
            'image' => 'required',
            'cargo' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);
        if ($validator->fails()) {
            return redirect()->route('admin.regadmin')
                ->withErrors($validator)
                ->withInput();
        }

        $admin = Admin::create(request()->all());
        auth()->login($admin);
        foreach ($request->images as $image) {
            $admin->image()->create([
                'path' => 'images/' . $image->store('admin', 'images'),
            ]);
        }
       return redirect()->to('/panel/admin/registro')->withSuccess('Administrador creado con exito');
    }

    public function editarAdmin( Admin $admin){
        return view('admin.edita_admin')->with([
            'admin' => $admin,
        ]);
    }
    public function actualizarAdmin(Admin $admin ){

        $admin->update(request()->all());
        return redirect()->route('panel.admin')->withSuccess("Los datos del administrador {$admin->nombre} se han sido actualizado");
    }
    public function eliminarAdmin(Admin $admin){

        try {

        $admin->delete();
 
        return redirect()->route('panel.admin')->withSuccess("El administrador {$admin->nombre} ha sido eliminado");
        }catch(QueryException $e) {
            return redirect()->route('panel.admin')->withWarning("No se pudo eliminar el administrador {$admin->nombre} debido a restricciones de clave externa.");
         }
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('cliente.login');
    }


}
