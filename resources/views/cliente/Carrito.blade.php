<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="../estilos/carrito.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" height="24"
                        class="d-inline-block align-text-top" />
                    RenovaGo
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end px-5" id="navbarNav">
                    <ul class="navbar-nav grid gap-3">
                        <li class="nav-item">
                            <a class="nav-link active borde-btn-inicio" aria-current="page"
                                href="inicio_sesion.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link borde-btn-inicio" href="pedidos.html">Pedidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link borde-btn-inicio" href="cuenta.html">Mi cuenta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link borde-btn-inicio" href="carrito.html"><i
                                class="fas fa-shopping-cart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link borde-btn-inicio" href="login.html">Cerrar sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br />
    <br />
    <main>
        <div class="text-center">
            <h1>Carrito de compras</h1>
        </div>
        <br />
        <!-- COMPRAS -->
        @if (!isset($carrito) || $carrito->productos->isEmpty())
        <div class="alert alert-warning">
            Aun no has agregado productos al carrito
        </div>
        @else
        <div class="container centrarCard p-2">
            <div class="card mb-3 py-2" style="max-width: 1300px">
                
                <div class="row">
                    @foreach ($carrito->productos as $producto)
                        
                    <div class="col-1 px-5">
                        <p>{{$producto->pivot->cantidad}}</p>
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset($producto->images->first()->path)}}" class="img-fluid rounded-start" alt="..." width="50" height="30" />
                    </div>
                    <div class="col-2">
                        <p>{{$producto->nombre}}</p>
                    </div>
                    <div class="col-md-1">
                        <p class="precios" style="color: orangered">$ {{$producto->precio}}</p>
                    </div>
                    <div class="col-1 canti py-3">
                        <button type="submit" class="btn btn-primary" style="
                  --bs-btn-padding-y: 0.25rem;
                  --bs-btn-padding-x: 0.5rem;
                  --bs-btn-font-size: 0.75rem;
                 ">
                            -
                        </button>
                    </div>
                    <div class="col-1">
                        <p>1</p>
                    </div>
                    <div class="col-1 py-3">
                        <button type="submit" class="btn btn-primary"
                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-font-size: 0.75rem">
                            +
                        </button>
                    </div>
                    <div class="col-2 py-3">
                        <form action="{{route('producto.carrito.destroy',['carrito' => $carrito->id,'producto' => $producto->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Remover
                            </button>
                        </form> 
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <div class="mb-3 px-5 mx-5">
            <h6 class="text-start mx-3"><strong>Valor total: $ {{$carrito->total}}</strong></h6>
        </div>

        <div class="row text-center">
            <div class="col">
                <button type="submit" class="btn btn-success">Atrás</button>
                <a href="{{route('orden.create')}}"><button type="submit" class="btn btn-secondary">Comprar</button></a>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>