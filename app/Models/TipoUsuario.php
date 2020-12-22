<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $guarded = [];

        //Un tipo de Usuario contiene muchas Personas
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
