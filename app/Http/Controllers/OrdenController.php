<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Http\Requests\StoreOrdenRequest;
use App\Http\Requests\UpdateOrdenRequest;
use App\Services\CarritoService;

class OrdenController extends Controller
{
    public $carritoService;
    public function __construct(CarritoService $carritoService){

        $this->carritoService = $carritoService;
     
    }
 
    public function create()
    {
        $carrito = $this->carritoService->getFromCookie();
        if(!isset($carrito) || $carrito->productos->isEmpty()){
            return redirect()
            ->back()
            ->withErrors('Tu carrito está vacio');
        }
        return view('cliente.orden')->with([
            'carrito'=> $carrito,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrdenRequest $request)
    {
        $usuario = $request->user();
        $orden = $usuario->ordens()->create(
            [
             'estado' => 'pendiente',
            ]
            );
            $carrito = $this->carritoService->getFromCookie();
            $carritoProductosconCantidad = $carrito->productos->mapWithKeys(function ($producto){
                $elemento[$producto->id] = ['cantidad' => $producto->pivot->cantidad];
                return $elemento;
            });
            $orden->productos()->attach($carritoProductosconCantidad->toArray());
            return redirect()->route('orden.pago.create',['orden' => $orden]);

    }

}
