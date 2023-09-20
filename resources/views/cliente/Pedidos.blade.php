<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/carrito.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24"
                        class="d-inline-block align-text-top">
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
    <br>
    <br>
    <main>
        <div class="container mt-4">
            <button type="button" class="btn btn-primary custom-button active" id="button1">Pedidos</button>
            <button type="button" class="btn btn-primary custom-button" id="button2">Mis pedidos</button>
        </div>
        <div class="page-section active" id="section1">
            <div class="text-center">
                <h1>Pedidos</h1>
            </div>
            <br>

            <!-- COMPRAS -->
            <div class="container centrarCard p-2">
                <div class="card mb-3 py-2" style="max-width: 1300px;">
                    <div class="row ">
                        <div class="col-1 px-5">
                            <p>1</p>
                        </div>
                        <div class="col-md-2">
                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..." width="50"
                                height="30">
                        </div>
                        <div class="col-2">
                            <p>Nombre del producto</p>
                        </div>
                        <div class="col-md-1">
                            <p class="precios" style="color: orangered;">$00.00</p>
                        </div>
                        <div class="col-1 canti py-3">
                            <button type="submit" class="btn btn-primary"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                -
                            </button>
                        </div>
                        <div class="col-1">
                            <p>1</p>
                        </div>
                        <div class="col-1 py-3">
                            <button type="submit" class="btn btn-primary"
                                style=" --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                +
                            </button>
                        </div>
                        <div class="col-2 py-3">
                            <button type="submit" class="btn btn-danger"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Eliminar
                            </button>
                        </div>

                    </div>
                </div>


            </div>


            <div class="container centrarCard p-2">
                <div class="card mb-3 py-2" style="max-width: 1300px;">
                    <div class="row ">
                        <div class="col-1 px-5">
                            <p>1</p>
                        </div>
                        <div class="col-md-2">
                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..." width="50"
                                height="30">
                        </div>
                        <div class="col-2">
                            <p>Nombre del producto</p>
                        </div>
                        <div class="col-md-1">
                            <p class="precios" style="color: orangered;">$00.00</p>
                        </div>
                        <div class="col-1 canti py-3">
                            <button type="submit" class="btn btn-primary"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                -
                            </button>
                        </div>
                        <div class="col-1">
                            <p>1</p>
                        </div>
                        <div class="col-1 py-3">
                            <button type="submit" class="btn btn-primary"
                                style=" --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                +
                            </button>
                        </div>
                        <div class="col-2 py-3">
                            <button type="submit" class="btn btn-danger"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Eliminar
                            </button>
                        </div>

                    </div>
                </div>


            </div>

            <div class="container centrarCard p-2">
                <div class="card mb-3 py-2" style="max-width: 1300px;">
                    <div class="row ">
                        <div class="col-1 px-5">
                            <p>1</p>
                        </div>
                        <div class="col-md-2">
                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..." width="50"
                                height="30">
                        </div>
                        <div class="col-2">
                            <p>Nombre del producto</p>
                        </div>
                        <div class="col-md-1">
                            <p class="precios" style="color: orangered;">$00.00</p>
                        </div>
                        <div class="col-1 canti py-3">
                            <button type="submit" class="btn btn-primary"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                -
                            </button>
                        </div>
                        <div class="col-1">
                            <p>1</p>
                        </div>
                        <div class="col-1 py-3">
                            <button type="submit" class="btn btn-primary"
                                style=" --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                +
                            </button>
                        </div>
                        <div class="col-2 py-3">
                            <button type="submit" class="btn btn-danger"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Eliminar
                            </button>
                        </div>

                    </div>
                </div>


            </div>

            <div class="container centrarCard p-2">
                <div class="card mb-3 py-2" style="max-width: 1300px;">
                    <div class="row ">
                        <div class="col-1 px-5">
                            <p>1</p>
                        </div>
                        <div class="col-md-2">
                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..." width="50"
                                height="30">
                        </div>
                        <div class="col-2">
                            <p>Nombre del producto</p>
                        </div>
                        <div class="col-md-1">
                            <p class="precios" style="color: orangered;">$00.00</p>
                        </div>
                        <div class="col-1 canti py-3">
                            <button type="submit" class="btn btn-primary"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                -
                            </button>
                        </div>
                        <div class="col-1">
                            <p>1</p>
                        </div>
                        <div class="col-1 py-3">
                            <button type="submit" class="btn btn-primary"
                                style=" --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                +
                            </button>
                        </div>
                        <div class="col-2 py-3">
                            <button type="submit" class="btn btn-danger"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Eliminar
                            </button>
                        </div>

                    </div>
                </div>


            </div>

            <div class=" mb-3 px-5 mx-5">
                <h6 class="text-start mx-3">Valor total: $2 </h6>
            </div>

            <div class="row text-center">
                <div class="col ">
                    <button type="submit" class="btn atras">
                        Atrás
                    </button>
                </div>

            </div>
        </div>
        <div class="page-section" id="section2">
            <div class="text-center">
                <h1>Mis Pedidos</h1>
            </div>
            <br>

            <!-- COMPRAS -->
            <div class="container centrarCard p-2">
                <div class="card mb-3 py-2" style="max-width: 1300px;">
                    <div class="row ">
                        <div class="col-1 px-5">
                            <p>1</p>
                        </div>
                        <div class="col-md-2">
                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..." width="50"
                                height="30">
                        </div>
                        <div class="col-2">
                            <p>Nombre del producto</p>
                        </div>
                        <div class="col-md-1">
                            <p class="precios" style="color: orangered;">$00.00</p>
                        </div>
                        <div class="col-1">
                            <p>Pendiente</p>
                        </div>
                        <div class="col-2 py-3">
                            <button type="submit" class="btn btn-success"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Detalles
                            </button>
                        </div>
                        <div class="col-2 py-3">
                            <button type="submit" class="btn btn-danger"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Eliminar
                            </button>
                        </div>

                    </div>
                </div>


            </div>


            <div class="container centrarCard p-2">
                <div class="card mb-3 py-2" style="max-width: 1300px;">
                    <div class="row ">
                        <div class="col-1 px-5">
                            <p>1</p>
                        </div>
                        <div class="col-md-2">
                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..." width="50"
                                height="30">
                        </div>
                        <div class="col-2">
                            <p>Nombre del producto</p>
                        </div>
                        <div class="col-md-1">
                            <p class="precios" style="color: orangered;">$00.00</p>
                        </div>
                        <div class="col-1">
                            <p>Pendiente</p>
                        </div>
                        <div class="col-2 py-3">
                            <button type="submit" class="btn btn-success"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Detalles
                            </button>
                        </div>
                        <div class="col-2 py-3">
                            <button type="submit" class="btn btn-danger"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Eliminar
                            </button>
                        </div>

                    </div>
                </div>


            </div>

            <div class="container centrarCard p-2">
                <div class="card mb-3 py-2" style="max-width: 1300px;">
                    <div class="row ">
                        <div class="col-1 px-5">
                            <p>1</p>
                        </div>
                        <div class="col-md-2">
                            <img src="../images/robot.png" class="img-fluid rounded-start" alt="..." width="50"
                                height="30">
                        </div>
                        <div class="col-2">
                            <p>Nombre del producto</p>
                        </div>
                        <div class="col-md-1">
                            <p class="precios" style="color: orangered;">$00.00</p>
                        </div>
                        <div class="col-1">
                            <p>Pendiente</p>
                        </div>
                        <div class="col-2 py-3">
                            <button type="submit" class="btn btn-success"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Detalles
                            </button>
                        </div>
                        <div class="col-2 py-3">
                            <button type="submit" class="btn btn-danger"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Eliminar
                            </button>
                        </div>

                    </div>
                </div>


            </div>

            <div class=" mb-3 px-5 mx-5">
                <h6 class="text-start mx-3">Valor total: $2 </h6>
            </div>

            <div class="row text-center">
                <div class="col ">
                    <button type="submit" class="btn atras">
                        Atrás
                    </button>
                </div>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="../js/pedido.js"></script>

</body>

</html>