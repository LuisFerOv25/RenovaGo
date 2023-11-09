@extends('layouts.masterlog')
@section('title','Inicio')
@section('content')

  <main>
      @empty ($productos))
          <div class="alert alert-warning">
            No hay productos para mostrar
          </div>
          
      @else
          
    <!-- Contenido -->
    <div class="container">
      <div class="row row-cols-2 row-cols-md-5 g-4">
        @foreach ($productos as $elemento)
        <div class="col">
          <div class="card h-100 card-style">
            <div id="carousel{{ $elemento->id }}" class="carousel slide carousel-fade">
              <div class="carousel-inner">
                  @foreach ($elemento->images as $image)
                      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                          <img class="d-block w-100 card-img-top" src="{{ asset($image->path) }}" height="200">
                      </div>
                  @endforeach
              </div>
              <a class="carousel-control-prev" href="#carousel{{ $elemento->id }}" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </a>
      
              <a class="carousel-control-next" href="#carousel{{ $elemento->id }}" role="button" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </a>
          </div>
            <div class="card-body">
              <div class="card-container"> <!-- Agrega esta clase -->
                <p class="titulo-prod">{{$elemento->nombre}}</p>
                <p class="card-text descripcion">{{$elemento->descripcion}}</p>
                <p class="precios" style="color: rgba(55, 0, 255, 0.897);">$ {{$elemento->precio}}</p>
                <div class="centrarButton" align="center">
                  <a class="btn btn-primary btn-sm" role="button" href="{{route('producto.mostrar',['producto' => $elemento->id])}}">Detalles</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        @endforeach
      </div>
      <br>
        <!-- PAGINACION-->
        <div class="d-flex justify-content-center">
          {{ $productos->links('pagination::bootstrap-4') }}
        </div>
        <br>
        <hr>
      </div>
    @endempty
  </main>
@endsection
