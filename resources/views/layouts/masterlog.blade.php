<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') -  RenovaGo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/reg_producto.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

    <body>
        <header>
            <nav class="navbar navbar-expand-sm bg-body-tertiary">
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
                        <a class="nav-link active" aria-current="page" href="{{route('producto.index')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pedidos.html">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cliente.cuenta')}}">Mi cuenta</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{route('carrito.index')}}"><i
                                class="fas fa-shopping-cart"></i>
                                @inject('carritoService', 'App\Services\CarritoService')
                                {{$carritoService->contarProductos()}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{route('cliente.logout')}}">
                          @csrf
                          <button type="submit" class="nav-link btn-sm">Cerrar sesión</button>
                        </form>
                      </li>

                </ul>
            </div>
            </div>
            </nav>
        </header>
        @if (@isset($errors) && $errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('success'))

            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
                
        @endif
        <div id="notification" class="alert mx-3 invisible"></div>
        @yield('content')
        <footer>
            <p class="copyright text-center">2023 RenovaGo &copy Todos los derechos reservados</p>
          </footer>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
          <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
          <script>
             import Echo from 'laravel-echo';

            import Pusher from 'pusher-js';
            window.Pusher = Pusher;

            window.Echo = new Echo({
                broadcaster: 'pusher',
                key: import.meta.env.VITE_PUSHER_APP_KEY,
                wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
            wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
                wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
            forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
            enabledTransports: ['ws', 'wss'],
            });

            Echo.private('notificacions').listen('CambioSesionUsuario',(e) =>{
            const notificacion = document.getElementById('notification');
            notificacion.innerText = e.message;
            notificacion.classList.remove('invisible');
            notificacion.classList.remove('alert-success');
            notificacion.classList.remove('alert-warning');
            notificacion.classList.add('alert-' + e.type);

        });
          </script>

    <script id="dsq-count-scr" src="//renovago.disqus.com/count.js" async></script>


    </body>
        
</html>