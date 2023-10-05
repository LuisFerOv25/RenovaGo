@extends('layouts.masterlog')
@section('title','Mi cuenta')
@section('content')

    <main>
        <div class="container mt-4">
            <a href="{{route('cliente.cuenta')}}"><button type="button" class="btn btn-primary btn-sm active" id="button1">Mis productos</button></a>
            <a href="{{route('cliente.misdatos')}}"><button type="button" class="btn btn-primary btn-sm custom-button" id="button2">Mis datos</button></a>
            <a href="{{route('chatify')}}"><button type="button" class="btn btn-success btn-sm custom-button" id="button3">Centro de mensajeria</button></a> 
        </div>
        <div class="page-section active" id="section1">
            <div class="container mt-4">
                <h1>Cuenta</h1>
            </div>

            <div class="container mt-4">
                <h2><b>Hola {{$usuario->nombre}}</b></h2>
            </div>
            <a href="{{route('producto.misproductos',['usuario' => $usuario->id])}}" class="btn btn-primary">Mis productos</a>

            <br>


            <br>

            <div class="row text-center">
                <div class="col ">
                    <button type="submit" class="btn btn-sm atras">
                        Atrás
                    </button>
                </div>
                <div class="col ">
                    <a href="{{route('producto.crear')}}"><button type="submit" class="btn btn-sm agregar">
                        Agregar
                    </button>
                    </a>
                </div>

            </div>
        </div>

    </main>

@endsection