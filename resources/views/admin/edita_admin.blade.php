<!DOCTYPE html>
<html lang="en">

@extends('layouts.admin')

@section('content')  

    <main>
        <div class="page-section active" id="section1">

            <br>
            <div class="conte">


                <div class="contenedor" id="contenedor">

                    <div class="form-container sign-in-container p-5">
                        <form method="POST" action="{{route('panel.adm.actualizar',['admin' =>$admin->id])}}">
                             @csrf
                             @method('PUT')
                             <div class="text-center">
                            <h4>Editar administrador</h4>
                             </div>
                            <br>
                            <input type="text" name="cedula" placeholder="Cedula" value="{{old('cedula') ?? $admin->cedula}}" />
                            <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre') ?? $admin->nombre}}" />
                            <input type="text" name="celular" placeholder="Celular" value="{{old('celular') ?? $admin->celular}}" />
                            <input type="text" name="direccion" placeholder="Direccion" value="{{old('direccion') ?? $admin->direccion}}" />
                            <input type="email" name="email" placeholder="Correo" value="{{old('email') ?? $admin->email}}" />
                            <select class="form-select"  name="cargo" aria-label="Default select example" >
                                <option selected disabled>Cargo</option>
                                <option value="Master">Master</option>
                                <option value="Atencion al cliente">Atencion al cliente</option>
                                <option value="Logistica y envios">Logistica y envios</option>
            
                            </select>
                            <br>
                            <div class="row text-center">
                                <div class="col ">
                                    <a href="#"><button type="button" class="btn btn-sm atras">
                                        Atrás
                                    </button>
                                    </a>
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