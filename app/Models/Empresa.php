<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empresa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'empresas';

    protected $fillable = [
        'nit',
        'nombre',
        'razon',
        'direccion',
        'email',
        'celular',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
    public function productos()
    {
        return $this->hasMany(Productos::class, 'empresa_id');
    }
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
