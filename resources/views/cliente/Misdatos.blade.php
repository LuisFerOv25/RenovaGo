@extends('layouts.masterlog')
@section('title','Mis datos')
@section('content')

    <main>
        <div class="container mt-4">
            <a href="{{route('cliente.cuenta')}}"><button type="button" class="btn btn-primary btn-sm active" id="button1">Inicio</button></a>
            <a href="{{route('cliente.misdatos')}}"><button type="button" class="btn btn-primary btn-sm custom-button" id="button2">Mis datos</button></a>
            <a href="{{route('chatify')}}"><button type="button" class="btn btn-success btn-sm custom-button" id="button3">Centro de mensajeria</button></a>
        </div>
        <div class="container mt-4">
            <h2><b>Hola {{$usuario->nombre}}</b></h2>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-4 py-1">
                    <h6><b>Foto de perfil</b></h6>
                    @if ($usuario->image)
                        <img src="{{ asset($usuario->image->path) }}" class="img-fluid rounded-start" alt="..." width="70" height="40">
                    @else
                        <span>Sin foto</span>
                    @endif
                </div>

                <div class="col-4">
                    <div class="row">
                        <p class="nav-link active borde-btn-inicio" aria-current="page"><b>Eliminar Foto</b></p>

                    </div>
                    <div class="row">
                    <form action="{{ route('misdatos.usuario.eliminar', ['usuario' => $usuario->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if ($usuario->image)
                            <button type="submit" class="btn btn-primary btn-sm btn-danger" role="button"><i class="fas fa-fw fa-trash"></i></button>
                        @else
                            <button type="button" class="btn btn-primary btn-sm btn-danger" role="button" disabled><i class="fas fa-fw fa-trash"></i></button>
                        @endif
                    </form>
                </div>
                </div>
        
            
                <div class="col-4">
                    <p class="nav-link active borde-btn-inicio" aria-current="page"><b>Cambiar
                            foto</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h6><b>Nombre</b></h6>
                    <h5>{{$usuario->nombre}}</h5>
                </div>
                <div class="col-6">
                    <form action="{{ route('usuario.agregar-imagen', ['usuario' => $usuario->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="btn btn-sm" name="imagen" accept="image/*">
                        <button type="submit" class="btn btn-sm edita">Agregar Imagen</button>
                    </form>
                    
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