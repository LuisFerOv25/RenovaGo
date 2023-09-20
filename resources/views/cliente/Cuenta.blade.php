@extends('layouts.masterlog')
@section('title','Mi cuenta')
@section('content')

    <main>
        <div class="container mt-4">
            <a href="{{route('cliente.cuenta')}}"><button type="button" class="btn btn-primary custom-button active" id="button1">Mis productos</button></a>
            <a href="{{route('cliente.misdatos')}}"><button type="button" class="btn btn-primary custom-button" id="button2">Mis datos</button></a>
        </div>
        <div class="page-section active" id="section1">
            <div class="container mt-4">
                <h1>Cuenta</h1>
            </div>

            <div class="container mt-4">
                <h2><b>Hola {{$usuario->nombre}}</b></h2>
            </div>
            <br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <!-- Tarjeta 1 -->
                        <div class="card mb-4" style="width: 20rem;">
                            <!-- Contenido de la tarjeta 1 -->
                            <div class="col-6">
                                <div class="card" style="width: 20rem;">
                                    <div class="row p-3 ">
                                        <div class="col-7">
                                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..."
                                                width="80" height="50">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <h5>Libros</h5>
                                        </div>
                                        <div class="col-4">
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 2 -->
                        <div class="card" style="width: 20rem;">
                            <!-- Contenido de la tarjeta 2 -->
                            <div class="col-6">
                                <div class="card" style="width: 20rem;">
                                    <div class="row p-3 ">
                                        <div class="col-7">
                                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..."
                                                width="80" height="50">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <h5>Juguetes</h5>
                                        </div>
                                        <div class="col-4">
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Tarjeta 3 -->
                        <div class="card mb-4" style="width: 20rem;">
                            <div class="col-6">
                                <div class="card" style="width: 20rem;">
                                    <div class="row p-3 ">
                                        <div class="col-7">
                                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..."
                                                width="80" height="50">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <h5>Ropa</h5>
                                        </div>
                                        <div class="col-4">
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 4 -->
                        <div class="card" style="width: 20rem;">
                            <div class="col-6">
                                <div class="card" style="width: 20rem;">
                                    <div class="row p-3 ">
                                        <div class="col-7">
                                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..."
                                                width="80" height="50">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <h5>Otros</h5>
                                        </div>
                                        <div class="col-4">
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <a href="{{route('producto.crear')}}"><button type="submit" class="btn btn-sm agregar">
                        Agregar
                    </button>
                    </a>
                </div>

            </div>
        </div>

    </main>

@endsection