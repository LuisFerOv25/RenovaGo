<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/style.css">
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

    <main class="py-5">
        <!-- COMPRAS -->
        <div class="container">
            <div class="mb-3" style=" max-width: 1300px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/robot.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title">NOMBRE DEL PRODUCTO</h5>
                        <h4 class="precios" style="color: orangered;">$00.00</h4>
                        <p class="card-text">
                        <h6>DETALLES DEL PRODUCTO
                        </h6>
                        </p>
                        <p class="card-text"><small class="text-muted">
                                <h5>Cantidad y vía de administración.</h5>
                            </small>
                        </p>
                        <h6>Cantidad: 4</h6>

                        <h6>Pedido por: Maritza Gonzales</h6>


                    </div>

                </div>

            </div>
        </div>
        <br>
        <section>
            <div class="row text-center">
                <div class="col ">
                    <button type="submit" class="btn btn-success">
                        Atrás
                    </button>
                    <button type="submit" class="btn btn-secondary">
                        Chat
                    </button>
                </div>

            </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


</body>

</html>