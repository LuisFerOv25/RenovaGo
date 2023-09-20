<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productos;
class Carrito extends Model
{
    use HasFactory;

    public function productos(){
        return $this->morphToMany(Productos::class,'productable')->withPivot('cantidad');
    }
    public function getTotalAttribute()
    {
        return $this->productos->pluck('total')->sum();
    }
}
