@extends('layouts.masterlogempr')
@section('title','Cuenta')
@section('content')

    <main>
        <div class="container mt-4">
            <a href="{{route('empresa.cuenta')}}"><button type="button" class="btn btn-primary custom-button active" id="button1">Mis productos</button></a>
            <a href="{{route('empresa.misdatos')}}"><button type="button" class="btn btn-primary custom-button" id="button2">Mis datos</button></a>
        </div>
        <div class="page-section active" id="section1">
            <div class="container mt-4">
                <h1>Cuenta</h1>
            </div>

            <div class="container mt-4">
                <h2><b>Hola {{$empresa->nombre}}</b></h2>
            </div>
            <a href="{{route('empresa.misproductos',['empresa' => $empresa->id])}}" class="btn btn-primary">Mis productos</a>

            <br>


            <br>

            <div class="row text-center">
                <div class="col ">
                    <button type="submit" class="btn btn-sm atras">
                        Atrás
                    </button>
                </div>
                <div class="col ">
                    <a href="{{route('producto.crearEmpresa')}}"><button type="submit" class="btn btn-sm agregar">
                        Agregar
                    </button>
                    </a>
                </div>

            </div>
        </div>

    </main>

@endsection