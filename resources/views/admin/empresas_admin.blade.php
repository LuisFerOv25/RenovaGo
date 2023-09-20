@extends('layouts.admin')
@section('title','Listado de empresas')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 text-center">Lista de Empresas registradas en el sistema</h1>
                    <br>
                    @empty ($empresas))
                        <div class="alert alert-warning">
                        No hay empresas para mostrar
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
                                            <th>Nit</th>
                                            <th>Nombre</th>
                                            <th>Razon</th>
                                            <th>Celular</th>
                                            <th>Direccion</th>
                                            <th>Correo</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $contador = 0 @endphp
                                        @foreach ($empresas as $key => $empresa)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$empresa->nit}}</td>
                                            <td>{{$empresa->nombre}}</td>
                                            <td>{{$empresa->razon}}</td>
                                            <td>{{$empresa->celular}}</td>
                                            <td>{{$empresa->direccion}}</td>
                                            <td>{{$empresa->email}}</td>
                                            <td>

                                                <a href="{{route('panel.empr.editar',['empresa' => $empresa->id])}}"><button class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pen"></i></button></a>
                                            </td>
                                            <td>
                                                <form action="{{route('panel.empr.eliminar', ['empresa' =>$empresa->id])}}" method="POST">
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