<?php

namespace App\Services;

use App\Models\Carrito;
use Illuminate\Support\Facades\Cookie;

class CarritoService
{
    protected $cookieName = 'carrito';
    protected $cookieExpiration;

    public function getFromCookie(){
        $cart = Cookie::get($this->cookieName);
        $carrito = Carrito::find($cart);
        return $carrito;
    }

    public function getFromCookieOrCreate()
    {
        $cart = $this->getFromCookie();
        return $cart ?? Carrito::create();
    }

    public function makeCookie(Carrito $carrito){
       return  $cookie = Cookie::make('carrito',$carrito->id, 7 * 24*60 );

    }
    public function contarProductos(){
        $carrito = $this->getFromCookie();
        if($carrito != null){
            return $carrito->productos->pluck('pivot.cantidad')->sum();
        }
        return 0;
    }


}