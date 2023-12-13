@extends('layouts.masterlog')
@section('title','Pedidos')
@section('content')

    <main>

        <div class="page-section active" id="section1">
            <div class="text-center">
                <h1>Pedidos</h1>
            </div>
            <br>
            <!-- COMPRAS -->
            <div class="container centrarCard p-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Estado</th>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pedidos as $pedido)
                                  
                             
                                <tr>
                                    <td>
                                      {{$pedido->estado}}</td>
                                      @foreach($pedido->productos as $producto)
                                      <td>{{ $producto->nombre }}</td>
                                      <td>{{ $producto->pivot->cantidad }}</td>
                                      <!-- Utiliza pivot para acceder a la columna cantidad en la tabla pivot (si es una relación muchos a muchos) -->
                                  @endforeach
            
                                </tr>                    
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>


        </div>

    </main>

@endsection