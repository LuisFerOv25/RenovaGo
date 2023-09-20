@extends('layouts.masterlog')
@section('title','Orden')
@section('content')

  <main>

          
      <div class="text-center py-2">
        Detalles del pago
      </div>
      <div class="mb-3 text-center">
        <h6 class="text-start mx-3"><strong> Valor total: $ {{$orden->total}}</strong></h6>
    </div>

      <form action="{{route('orden.pago.store',['orden' => $orden->id])}}" method="POST">
        @csrf
        
        <button type="submit" class="btn btn-success"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Pagar
        </button>
      </form>
        <br>
        <hr>
      </div>
  </main>
@endsection
