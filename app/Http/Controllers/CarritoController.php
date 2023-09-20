<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Http\Requests\StoreCarritoRequest;
use App\Http\Requests\UpdateCarritoRequest;
use App\Services\CarritoService;

class CarritoController extends Controller
{
    public $carritoService;
    public function __construct(CarritoService $carritoService){

        $this->carritoService = $carritoService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $carrito =$this->carritoService->getFromCookieOrCreate();
        return view('cliente.carrito')->with(
           [ 'carrito' => $this->carritoService->getFromCookie(),
        ]);
        return $carrito->productos;
    }

}
