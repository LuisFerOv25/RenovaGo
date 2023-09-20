
@extends('layouts.masterlog')
@section('title','Detalles del producto')
@section('content')

    <main class="py-5">
        <!-- COMPRAS -->
        <div class="container">
            <div class="mb-3" style=" max-width: 1300px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset($productos->images->first()->path)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">{{$productos->nombre}}</h5>
                        <h4 class="precios" style="color: orangered;">$ {{$productos->precio}}</h4>
                        <p class="card-text">
                        <h6>{{$productos->descripcion}}
                        </h6>
                        </p>

                        <div class="py-1">
                            <button type="submit" class="btn btn-primary"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                -
                            </button>

                            <input class="form-control-sm cant" type="text" style="width: 130px; height: 35px;" value="{{$productos->cantidad}}">

                            <button type="submit" class="btn btn-primary"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                +
                            </button>
                            <form action="{{route('producto.carrito.store',['producto' => $productos->id])}}" method="POST">
                                @csrf
                                
                                <button type="submit" class="btn btn-success"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    Comprar
                                </button>
                                </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center">Calificaciones</h5>
        <br>
        <div class="container">
            <p class="text">Marcelo gomez:
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea id commodi, nam natus, debitis
                minima doloremque
                adipisci atque praesentium vel accusantium, error ad laborum iste quisquam fugit qui veniam a.
            </p>
            <p class="card-text">Marcelo gomez:
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea id commodi, nam natus, debitis
                minima doloremque
                adipisci atque praesentium vel accusantium, error ad laborum iste quisquam fugit qui veniam a.
            </p>
            <p class="card-text">Marcelo gomez:
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea id commodi, nam natus, debitis
                minima doloremque
                adipisci atque praesentium vel accusantium, error ad laborum iste quisquam fugit qui veniam a.
            </p>
            <hr>
        </div>
    </main>
    @endsection