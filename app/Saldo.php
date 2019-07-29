<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
