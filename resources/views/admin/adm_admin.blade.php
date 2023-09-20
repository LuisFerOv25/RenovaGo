@extends('layouts.admin')
@section('title','Listado de Admin')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 text-center">Lista de administradores registrados en el sistema</h1>
                    <br>
                    <div class="text-start py-3">
                        <a href="#"><button type="submit" class="btn btn-sm btn-success">Registrar</button></a>
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
                                            <th>Apellido</th>
                                            <th>Celular</th>
                                            <th>Direccion</th>
                                            <th>Correo</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>12345678</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>555-123-4567</td>
                                            <td>123 Main St</td>
                                            <td>john@example.com</td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-warning">Editar</button></a></td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>98765432</td>
                                            <td>Jane</td>
                                            <td>Smith</td>
                                            <td>555-987-6543</td>
                                            <td>456 Elm St</td>
                                            <td>jane@example.com</td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-warning">Editar</button></a></td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>55555555</td>
                                            <td>Michael</td>
                                            <td>Johnson</td>
                                            <td>555-555-5555</td>
                                            <td>789 Oak Ave</td>
                                            <td>michael@example.com</td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-warning">Editar</button></a></td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>88888888</td>
                                            <td>Sarah</td>
                                            <td>Williams</td>
                                            <td>555-888-8888</td>
                                            <td>567 Pine St</td>
                                            <td>sarah@example.com</td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-warning">Editar</button></a></td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>44444444</td>
                                            <td>Robert</td>
                                            <td>Brown</td>
                                            <td>555-444-4444</td>
                                            <td>234 Cedar Rd</td>
                                            <td>robert@example.com</td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-warning">Editar</button></a></td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>11111111</td>
                                            <td>Linda</td>
                                            <td>Miller</td>
                                            <td>555-111-1111</td>
                                            <td>789 Maple Ave</td>
                                            <td>linda@example.com</td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-warning">Editar</button></a></td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>66666666</td>
                                            <td>David</td>
                                            <td>Anderson</td>
                                            <td>555-666-6666</td>
                                            <td>345 Oak Ave</td>
                                            <td>david@example.com</td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-warning">Editar</button></a></td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>77777777</td>
                                            <td>Mary</td>
                                            <td>Davis</td>
                                            <td>555-777-7777</td>
                                            <td>678 Elm St</td>
                                            <td>mary@example.com</td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-warning">Editar</button></a></td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>22222222</td>
                                            <td>James</td>
                                            <td>Wilson</td>
                                            <td>555-222-2222</td>
                                            <td>567 Cedar Rd</td>
                                            <td>james@example.com</td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-warning">Editar</button></a></td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>33333333</td>
                                            <td>Emily</td>
                                            <td>Jones</td>
                                            <td>555-333-3333</td>
                                            <td>789 Pine St</td>
                                            <td>emily@example.com</td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-warning">Editar</button></a></td>
                                            <td><a href="#"><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection