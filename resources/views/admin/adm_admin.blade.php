@extends('layouts.admin')
@section('title','Listado de Admin')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 text-center">Lista de administradores registrados en el sistema</h1>
                    <br>
                    @empty($admin))
                        <div class="alert alert-warning">
                        No hay datos para mostrar
                        </div>
                    @else
                        <div class="text-start py-3">
                            <a href="{{route('panel.registro.admin')}}"><button type="submit" class="btn btn-sm btn-success">Registrar</button></a>
                        </div>
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
                                            @foreach ($admin as $key => $admins)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$admins->cedula}}</td>
                                                <td>{{$admins->nombre}}</td>
                                                <td>{{$admins->celular}}</td>
                                                <td>{{$admins->direccion}}</td>
                                                <td>{{$admins->email}}</td>
                                                <td>{{$admins->cargo}}</td>
                                                <td>

                                                    <a href="{{route('panel.adm.editar',['admin' => $admins->id])}}"><button class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pen"></i></button></a>
                                                </td>
                                                <td>
                                                     <form action="{{route('panel.adm.eliminar', ['admin' =>$admins->id])}}" method="POST">
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