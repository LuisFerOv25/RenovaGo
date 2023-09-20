<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Services\CarritoService;

class ProductoCarritoController extends Controller
{

    public $carritoService;

    public function __construct(CarritoService $carritoService)
    {
        $this->carritoService = $carritoService;
    }

    public function store(Request $request, Productos $producto)
    {
        $carrito = $this->carritoService->getFromCookieOrCreate();

        $cantidad = $carrito->productos()->find($producto->id)->pivot->cantidad ?? 0;

        $carrito->productos()->syncWithoutDetaching([$producto->id => ['cantidad' => $cantidad +1] ,
         ]);

         $cookie = $this->carritoService->makeCookie($carrito);
        return redirect()->back()->cookie($cookie);
    }

    public function destroy(Productos $producto, Carrito $carrito)
    {
        $carrito->productos()->detach($producto->id);
        $cookie = $this->carritoService->makeCookie($carrito);

        return redirect()->back()->cookie($cookie);
    }
}
