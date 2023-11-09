<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Pago;
use App\Models\Productos;
use Illuminate\Http\Request;
use App\Services\CarritoService;

class OrdenPagoController extends Controller
{
    public $carritoService;
    public function __construct(CarritoService $carritoService){

        $this->carritoService = $carritoService;
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Orden $orden)
    {
     return view('cliente.Pago')->with(
        [
            'orden' => $orden,
        ]
     );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Orden $orden,Productos $producto)
    {
        $this->carritoService->getFromCookie()->productos()->detach();
        $orden->pago()->create(
            [
                'cantidad' => $orden->total,
                'pagado' => now(),
            ]
            );
            $orden->estado = 'pagado';
            $orden->save();
            $producto->delete();
            return redirect()->route('producto.index')->withSuccess(
                "Gracias, el pago por \${$orden->total} se ha realizado con exíto"
            );

    }
}
