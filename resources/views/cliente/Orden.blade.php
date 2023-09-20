@extends('layouts.masterlog')
@section('title','Orden')
@section('content')

  <main>

          
      <div class="text-center py-2">
        Detalles de la orden
      </div>
    <!-- Contenido -->
    <div class="container">
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>

                    </tr>
                </thead>
                <tbody>
                  @foreach ($carrito->productos as $producto)
                      
                 
                    <tr>
                        <td>
                          <img src="{{asset($producto->images->first()->path)}}" alt="imagen" width="100">
                          {{$producto->nombre}}</td>
                        <td>{{$producto->precio}}</td>
                        <td>{{$producto->pivot->cantidad}}</td>
                        <td><strong>{{$producto->total}}</strong></td>
                    </tr>                    
                </tbody>
                @endforeach
            </table>
        </div>
        <div class="mb-3">
            <h6 class="text-start mx-3"><strong> Valor total: $ {{$carrito->total}}</strong></h6>
        </div>
    </div>
      <br>

      <form action="{{route('orden.store')}}" method="POST">
        @csrf
        
        <button type="submit" class="btn btn-success"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Confirmar orden
        </button>
        </form>
        <br>
        <hr>
      </div>
  </main>
@endsection
