<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productos extends Model
{
    use HasFactory, SoftDeletes;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'productos';
    protected $with = [
        'images',
    ];
    protected $fillable = [
        'nombre',
        'descripcion',
        'cantidad',
        'precio',
        'categoria',
        'user_id'
    ];
    public function carritos(){
        return $this->morphedByMany(Carrito::class,'productable')->withPivot('cantidad');
    }

    public function ordens(){
        return $this->morphedByMany(Orden::class,'productable')->withPivot('cantidad');
    }
    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }
    public function getTotalAttribute()
    {
        return $this->pivot->cantidad * $this->precio;
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categoria')->withDefault();
    }
    public function usuario()
{
    return $this->belongsTo(User::class, 'user_id');
}

}
