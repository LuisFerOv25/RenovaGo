<?php

namespace App\Models;
use App\Models\Chat;
use App\Models\Message;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'admins';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cedula',
        'nombre',
        'direccion',
        'email',
        'celular',
        'cargo',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'admin_since',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
    protected $dates = ['admin_since',];

    public function ordens(){
        return $this->hasMany(Orden::class, 'customer_id');
    }

    public function pagos(){
        return $this->hasManyThrough(Pago::class, Orden::class, 'customer_id');
    }
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
    public function esAdmin()
    {
        return $this->admin_since != null
            && $this->admin_since->lessThanOrEqualTo(now());
    }
    public function productos()
    {
    return $this->hasMany(Productos::class);
    }
    public function chats(): BelongsToMany
    {
        return $this->belongsToMany(Chat::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
