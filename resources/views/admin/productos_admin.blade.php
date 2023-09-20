@extends('layouts.admin')
@section('title','Listado de productos')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 text-center">Lista de productos registrados en el sistema</h1>
                    <br>
                    @empty ($productos))
                        <div class="alert alert-warning">
                        No hay productos para mostrar
                        </div>
                    
                    @else
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
      
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

                                                <a href="{{route('panel.prod.editar',['producto' => $producto->id])}}"><button class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pen"></i></button></a>
                                            </td>
                                            <td>
                                                <form action="{{route('panel.prod.eliminar', ['producto' =>$producto->id])}}" method="POST">
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
                    </div>
                    @endempty

                </div>
                <!-- /.container-fluid -->
@endsection
