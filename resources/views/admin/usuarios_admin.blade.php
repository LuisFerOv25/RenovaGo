@extends('layouts.admin')
@section('title','Listado de usuarios')
@section('content')
             <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 text-center">Lista de usuarios registrados en el sistema</h1>
                    <br>
                    @empty ($usuarios))
                        <div class="alert alert-warning">
                        No hay usuarios para mostrar
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
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Celular</th>
                                            <th>Direccion</th>
                                            <th>Correo</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        @foreach ($usuarios as $key => $usuario)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$usuario->cedula}}</td>
                                            <td>{{$usuario->nombre}}</td>
                                            <td>{{$usuario->celular}}</td>
                                            <td>{{$usuario->direccion}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>

                                                <a href="{{route('panel.user.editar',['usuario' => $usuario->id])}}"><button class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pen"></i></button></a>
                                            </td>
                                            <td>
                                                 <form action="{{route('panel.user.eliminar', ['usuario' =>$usuario->id])}}" method="POST">
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
                <br>
                <!-- PAGINACION-->
                <div class="d-flex justify-content-center">
                  {{ $usuarios->links('pagination::bootstrap-4') }}
                </div>
                <br>
                <br>
@endsection