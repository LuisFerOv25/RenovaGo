<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function registro()
    {
        return view('empresa.registroempr');
    }

}
