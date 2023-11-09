@extends('layouts.masterlogempr')
@section('title','Cuenta')
@section('content')

    <main>
        <div class="container mt-4">
            <a href="{{route('empresa.cuenta')}}"><button type="button" class="btn btn-primary btn-sm custom-button active" id="button1">Mis productos</button></a>
            <a href="{{route('empresa.misdatos')}}"><button type="button" class="btn btn-primary btn-sm custom-button" id="button2">Mis datos</button></a>
            <a href="{{route('chatify')}}"><button type="button" class="btn btn-success btn-sm custom-button" id="button3">Centro de mensajeria</button></a> 
        
        </div>

        <div class="page-section active" id="section1">
            <div class="container mt-4">
                <h1>Cuenta</h1>
            </div>

            <div class="container mt-4">
                <h2><b>Hola {{$empresa->nombre}}</b></h2>
            </div>

            <br>
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-6 col-lg-6 mb-4">
                        <a href="{{route('empresa.misproductosempr',['empresa' => $empresa->id, 'categoria' => 2])}}" class="card mx-auto no-underline" style="height: 150px; width: 250px">
                            <div class="row p-3">
                                <div class="col-7">
                                    <img src="{{ asset('static/ropaymoda.svg') }}" class="img-fluid rounded-start" alt="..." width="80" height="50">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6" style="font-size: 10px">
                                    <p><b>Ropa y Moda</b></p>
                                </div>
                                <div class="col-4">
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 mb-4">
                        <a href="{{route('empresa.misproductosempr',['empresa' => $empresa->id, 'categoria' => 3])}}" class="card mx-auto no-underline" style="height: 150px; width: 250px">
                            <div class="row p-3">
                                <div class="col-7">
                                    <img src="{{ asset('static/hogarydec.gif') }}" class="img-fluid rounded-start" alt="..." width="80" height="50">
                                </div>
                            </div>
                            <div class="row px-3">
                                <div class="col-6" style="font-size: 10px">
                                    <p><b>Hogar y decoracion</b></p>
                                </div>
                                <div class="col-4">
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 mb-4">
                        <a href="{{route('empresa.misproductosempr',['empresa' => $empresa->id, 'categoria' => 18])}}" class="card mx-auto no-underline" style="height: 150px; width: 250px">
                            <div class="row p-3">
                                <div class="col-7">
                                    <img src="{{ asset('static/electronicahogar.svg') }}" class="img-fluid rounded-start" alt="..." width="80" height="50">
                                </div>
                            </div>
                            <div class="row px-3">
                                <div class="col-6" style="font-size: 10px">
                                    <p><b>Electrónica para el Hogar</b></p>
                                </div>
                                <div class="col-4">
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 mb-4">
                        <a href="{{route('empresa.todosmisprodempr',['empresa' => $empresa->id])}}" class="card mx-auto no-underline" style="height: 150px; width: 250px">
                            <div class="row p-3">
                                <div class="col-7">
                                    <img src="{{ asset('static/otros.svg') }}" class="img-fluid rounded-start" alt="..." width="80" height="50">
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-6" style="font-size: 10px">
                                    <p><b>Otros</b></p>
                                </div>
                                <div class="col-4">
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>

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
            <br>
            <br>
            
        </div>

    </main>

@endsection