<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cantidad',
        'pagado',
        'id_orden'
    ];

    protected $dates = ['pagado',];

    public function orden(){
        return $this->belongsTo(Orden::class,'id_orden');
    }
}
