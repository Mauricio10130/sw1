<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $guarded = [];

    //Un profesor es una persona
    public function personas()
    {
        return $this->hasOne('App\Models\Persona');
    }
}
