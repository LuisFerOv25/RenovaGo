@extends('layouts.masterlog')
@section('title','Carrito de compras')
@section('content')

    <main>
        <div class="text-center">
            <h1>Carrito de compras</h1>
        </div>
        <br />
        <!-- COMPRAS -->
        @if (!isset($carrito) || $carrito->productos->isEmpty())
        <div class="alert alert-warning">
            Aun no has agregado productos al carrito
        </div>
        @else
        <div class="container centrarCard p-2">
            <div class="card mb-3 py-2" style="max-width: 1300px">
                
                <div class="row">
                    @foreach ($carrito->productos as $producto)
                        
                    <div class="col-1 px-5">
                        <p>{{$producto->pivot->cantidad}}</p>
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset($producto->images->first()->path)}}" class="img-fluid rounded-start" alt="..." width="50" height="30" />
                    </div>
                    <div class="col-2">
                        <p>{{$producto->nombre}}</p>
                    </div>
                    <div class="col-md-1">
                        <p class="precios" style="color: orangered">$ {{$producto->precio}}</p>
                    </div>
                    <div class="col-1 canti py-3">
                        <button type="submit" class="btn btn-primary" style="
                  --bs-btn-padding-y: 0.25rem;
                  --bs-btn-padding-x: 0.5rem;
                  --bs-btn-font-size: 0.75rem;
                 ">
                            -
                        </button>
                    </div>
                    <div class="col-1">
                        <p>1</p>
                    </div>
                    <div class="col-1 py-3">
                        <button type="submit" class="btn btn-primary"
                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-font-size: 0.75rem">
                            +
                        </button>
                    </div>
                    <div class="col-2 py-3">
                        <form action="{{route('producto.carrito.destroy',['carrito' => $carrito->id,'producto' => $producto->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Remover
                            </button>
                        </form> 
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
       

        <div class="mb-3 px-5 mx-5">
            <h6 class="text-start mx-3"><strong>Valor total: $ {{$carrito->total}}</strong></h6>
        </div>
        @endif
        <div class="row text-center">
            <div class="col">
                <button type="submit" class="btn btn-success">Atrás</button>
                <a href="{{route('orden.create')}}"><button type="submit" class="btn btn-secondary">Comprar</button></a>
            </div>
        </div>
    </main>
    @endsection