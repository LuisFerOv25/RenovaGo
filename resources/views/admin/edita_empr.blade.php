<!DOCTYPE html>
<html lang="en">

@extends('layouts.master')

@section('content')  

    <main>
        <div class="container mt-4">
            <a href="cuenta.html"><button type="button" class="btn btn-primary custom-button active" id="button1">Mis productos</button></a>
            <a href="misdatos.html"><button type="button" class="btn btn-primary custom-button" id="button2">Mis datos</button></a>
        </div>
        <div class="page-section active" id="section1">
            <div class="container mt-4">
                <h1>Cuenta</h1>
            </div>

            <div class="container mt-4">
                <h2><b>Hola julio juarez</b></h2>
            </div>
            <br>
            <div class="conte">


                <div class="contenedor" id="contenedor">

                    <div class="form-container sign-in-container">
                        <form method="POST" action="{{route('panel.empr.actualizar',['empresa' =>$empresa->id])}}">
                             @csrf
                             @method('PUT')
                            <h4>Editar empresa</h4>
                            <br>
                            <input type="text" name="nombre" placeholder="Nit" value="{{old('nit') ?? $empresa->nit}}" />
                            <input type="text" name="nombre" placeholder="Nombre del empresa" value="{{old('nombre') ?? $empresa->nombre}}" />
                            <input type="text" name="razon" placeholder="Razon Social" value="{{old('razon') ?? $empresa->razon}}" />
                            <input type="phone" name="celular" placeholder="Celular" value="{{old('celular') ?? $empresa->celular}}" />
                            <input type="address" name="direccion" placeholder="direccion" value="{{old('direccion') ?? $empresa->direccion}}" />
                            <input type="email" name="email" placeholder="Correo electronico" value="{{old('email') ?? $empresa->email}}" />


                            <br>
                            <div class="row text-center">
                                <div class="col ">
                                    <button type="button" class="btn btn-sm atras">
                                        Atrás
                                    </button>
                                    <button type="submit" class="btn btn-sm agregar">
                                        Editar
                                    </button>
                                </div>

                            </div>
                            <br>

                        </form>
                    </div>
                </div>
            </div>

            <br>

        </div>

    </main>

@endsection