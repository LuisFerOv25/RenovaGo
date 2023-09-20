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
                        <form method="POST" action="{{route('producto.actualizar',['producto' =>$producto->id])}}">
                             @csrf
                             @method('PUT')
                            <h4>Editar producto</h4>
                            <br>
                            <input type="text" name="nombre" placeholder="Nombre del producto" value="{{old('nombre') ?? $producto->nombre}}" />
                            <input type="text" name="descripcion" placeholder="Descripcion" value="{{old('descripcion') ?? $producto->descripcion}}" />
                            <input type="text" name="cantidad" placeholder="Cantidad" min="0" value="{{old('cantidad') ?? $producto->cantidad}}" />
                            <input type="number" name="precio" placeholder="Precio"  min="1.00" step="0.01" value="{{old('precio') ?? $producto->precio}}" />
                            <select class="form-select"  name="categoria" aria-label="Default select example" >
                                <option selected disabled>Categoria</option>
                                <option value="1">Libros</option>
                                <option value="2">Juguetes</option>
                                <option value="3">Ropa</option>
                            </select>

                            <br>
                            <div class="row text-center">
                                <div class="col ">
                                    <button type="button" class="btn btn-sm atras">
                                        Atrás
                                    </button>
                                    <button type="submit" class="btn btn-sm agregar">
                                        Publicar
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