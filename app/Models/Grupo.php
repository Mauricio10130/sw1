<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $guarded = [];

    //Un Grupo se asocia con muchos users
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
