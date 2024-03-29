<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function home(){
        return $this->hasOne('App\Home');
    }
    public function depositos(){
        return $this->hasMany('App\Deposito');
    }
    public function saques(){
        return $this->hasMany('App\Saque');
    }
    public function suportes(){
        return $this->hasMany('App\Suporte');
    }
    public function trades(){
        return $this->hasMany('App\Trade');
    }
    public function saldo(){
        return $this->hasOne('App\Saldo');
    }
}
