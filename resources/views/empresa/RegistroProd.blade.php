
@extends('layouts.masterlogempr')
@section('title','Registrar producto')
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
            <div class="conte">

                <div class="contenedor" id="contenedor">

                    <div class="form-container sign-in-container">
                        <form method="POST" action="{{route('producto.creacion_prod_empr')}}" enctype="multipart/form-data">
                             @csrf
                            <h4>Registrar producto</h4>
                            <br>
                            <input type="text" name="nombre" placeholder="Nombre del producto" value="{{old('nombre')}}"/>
                            <input type="text" name="descripcion" placeholder="Descripcion" value="{{old('descripcion')}}"/>
                            <input type="text" name="cantidad" placeholder="Cantidad" min="0" value="{{old('cantidad')}}"/>
                            <input type="number" name="precio" placeholder="Precio"  min="1.00" step="0.01" value="{{old('precio')}}"/>
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
                            <div class="custom-file">
                                <input type="file" accept="image/*" name="images[]" class="custom-file-input" multiple>
                            </div>
                            <br>
                            <div class="row text-center">
                                <div class="col ">
                                    <a href="{{ url()->previous() }}" class="btn btn-primary">Atrás</a>

                                    </a>
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