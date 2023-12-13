<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Pago;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function pedido()
    {
        // Obtener el ID del usuario que inició sesión
        $userId = Auth::id();
    
        // Obtener los pedidos del usuario actual con los productos relacionados
        $pedidos = Orden::where('customer_id', $userId)
            ->with('productos') // Asegúrate de tener la relación definida en el modelo Orden
            ->get();
    
        // Puedes acceder a los datos de los pedidos y productos así:
        foreach ($pedidos as $pedido) {
            // Acceder a datos del pedido
            $idOrden = $pedido->id;
            $estadoOrden = $pedido->estado;
    
            // Acceder a productos relacionados con la orden
            foreach ($pedido->productos as $producto) {
                $nombreProducto = $producto->nombre;
                // Otros datos del producto...
            }
        }
    
        // Puedes devolver los pedidos a tu vista o realizar otras acciones según tus necesidades
        return view('cliente.pedidos', compact('pedidos'));
    }
    
    
}
