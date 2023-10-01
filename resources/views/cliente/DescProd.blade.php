
@extends('layouts.masterlog')
@section('title','Detalles del producto')
@section('content')

    <main class="py-5">
        <!-- COMPRAS -->
        <div class="container">
            <div class="mb-3" style=" max-width: 1300px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset($productos->images->first()->path)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">{{$productos->nombre}}</h5>
                        <h4 class="precios" style="color: orangered;">$ {{$productos->precio}}</h4>
                        <p class="card-text">
                        <h6>{{$productos->descripcion}}
                        </h6>
                        </p>

                        <div class="py-1">
                            <button type="submit" class="btn btn-primary"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                -
                            </button>

                            <input class="form-control-sm cant" type="text" style="width: 130px; height: 35px;" value="{{$productos->cantidad}}">

                            <button type="submit" class="btn btn-primary"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                +
                            </button>
                            <form action="{{route('producto.carrito.store',['producto' => $productos->id])}}" method="POST">
                                @csrf
                                
                                <button type="submit" class="btn btn-success"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    Comprar
                                </button>
                                </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center">Comentarios</h5>
        <br>
        <div id="disqus_thread"></div>
        <script>
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://renovago.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </main>
    @endsection