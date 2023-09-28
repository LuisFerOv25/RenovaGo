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
                        <form method="POST" action="{{route('panel.prod.actualizar',['producto' =>$producto->id])}}">
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
                                <option value="1">Electrónica</option>
                                <option value="2">Ropa y Moda</option>
                                <option value="3">Hogar y Decoración</option>
                                <option value="4">Belleza y Cuidado Personal</option>
                                <option value="5">Salud y Bienestar</option>
                                <option value="6">Alimentos y Bebidas</option>
                                <option value="7">Joyería y Relojes</option>
                                <option value="8">Deportes y Fitness</option>
                                <option value="9">Juguetes y Juegos</option>
                                <option value="10">Libros y Material de Lectura</option>
                                <option value="11">Herramientas y Mejoras para el Hogar</option>
                                <option value="12">Arte y Artesanía</option>
                                <option value="13">Electrónica de Consumo</option>
                                <option value="14">Muebles</option>
                                <option value="15">Productos para Bebés y Niños</option>
                                <option value="16">Automoción y Accesorios de Vehículos</option>
                                <option value="17">Suministros de Oficina</option>
                                <option value="18">Electrónica para el Hogar</option>
                                <option value="19">Productos de Viaje y Equipaje</option>
                                <option value="20">Instrumentos Musicales</option>
                            </select>

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