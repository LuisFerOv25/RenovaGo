<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productos;
class Orden extends Model
{
    use HasFactory;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'estado',
        'customer_id',

    ];
    public function pago(){
        return $this->hasOne(Pago::class,'id_orden');
    }
    public function user(){
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function productos(){
        return $this->morphToMany(Productos::class,'productable')->withPivot('cantidad');
    }
    public function getTotalAttribute()
    {
        return $this->productos->pluck('total')->sum();
    }
}
