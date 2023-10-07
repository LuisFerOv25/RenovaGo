@extends('layouts.masterlogempr')
@section('title','Productos registrados')
@section('content')
<main>
    <div class="container mt-4">
        <a href="{{route('empresa.cuenta')}}"><button type="button" class="btn btn-primary btn-sm custom-button active" id="button1">Mis productos</button></a>
        <a href="{{route('empresa.misdatos')}}"><button type="button" class="btn btn-primary btn-sm custom-button" id="button2">Mis datos</button></a>
        <a href="{{route('chatify')}}"><button type="button" class="btn btn-success btn-sm custom-button" id="button3">Centro de mensajeria</button></a> 
    
    </div>

    @empty($productos)
    <div class="alert alert-warning">
        No hay productos registrados a su nombre
      </div>
    @else
   
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $contador = 0 @endphp
                        @foreach ($productos as $key => $producto)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>$ {{$producto->precio}}</td>
                            <td>{{$producto->categoria}}</td>
                            <td>
                                <a href="{{route('producto.editar',['producto' => $producto->id])}}"><button class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pen"></i></button></a>
                            </td>
                            <td>
                                <form action="{{route('producto.eliminar', ['producto' =>$producto->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary  btn-sm btn-danger" role="button"><i class="fas fa-fw fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        @endempty
    </main>
@endsection
