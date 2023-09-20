<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Empresa extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

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
    protected $hidden = [
        'password',
        'remember_token'
    ];

}
