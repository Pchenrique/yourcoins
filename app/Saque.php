<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Saque;

class Saque extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
