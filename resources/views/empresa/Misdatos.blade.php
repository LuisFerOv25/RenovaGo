@extends('layouts.masterlogempr')
@section('title','Datos Empresa')
@section('content')

    <main>
        <div class="container mt-4">
            <a href="{{route('empresa.cuenta')}}"><button type="button" class="btn btn-primary custom-button active" id="button1">Mis productos</button></a>
            <a href="{{route('empresa.misdatos')}}button type="button" class="btn btn-primary custom-button" id="button2">Mis datos</button></a>
        </div>
        <div class="container mt-4">
            <h2><b>Hola julio juarez</b></h2>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-4 py-1">
                    <h6><b>Foto de perfil</b></h6>
                    <img src="{{asset($usuario->image->path)}}" class="img-fluid rounded-start" alt="..." width="70" height="40">
                </div>
                <div class="col-4">
                    <a class="nav-link active borde-btn-inicio" aria-current="page" href="index.html"><b>Quitar
                            foto</b></a>
                </div>
                <div class="col-4">
                    <a class="nav-link active borde-btn-inicio" aria-current="page" href="index.html"><b>Cambiar
                            foto</b></a>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h6><b>Nombre</b></h6>
                    <h5>{{$usuario->nombre}}</h5>
                </div>
                <div class="col-6">
                    <a class="nav-link active borde-btn-inicio" aria-current="page" href="index.html"><b>Editar</b></a>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col ">
                <button type="submit" class="btn btn-sm edita">
                    Editar más
                </button>
            </div>

        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5><b>Notificaciones</b></h5>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <div class="form-check form-switch px-5 py-4">
                        <label class="form-check-label" for="flexSwitchCheckChecked"><b>Habilitar
                                notificaciones</b></label>
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                            checked>
                    </div>

                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col ">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Atrás</a>
            </div>

        </div>

    </main>

@endsection