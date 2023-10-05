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
                        <th>Chat</th>
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
                        <td>
                          @php
                           $id_prop = ($producto->empresa_id == null ? $producto->user_id : $producto->empresa_id)
                          @endphp
                          <a href="{{ route('user', ['id' => $id_prop]) }}">
                            <button class="btn btn-sm btn-warning">
                              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M160 368c26.5 0 48 21.5 48 48v16l72.5-54.4c8.3-6.2 18.4-9.6 28.8-9.6H448c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16V352c0 8.8 7.2 16 16 16h96zm48 124l-.2 .2-5.1 3.8-17.1 12.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V474.7v-6.4V468v-4V416H112 64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H448c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H309.3L208 492z"/>
                              </svg>
                            </button>
                          </a>

                        </td>

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
