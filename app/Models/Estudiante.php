<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $guarded = [];

    //Un estudiante es una persona
    public function personas()
    {
        return $this->hasOne('App\Models\Persona');
    }

        //Un estudiante tiene muchas acta_nota
    public function acta_nota()
    {
        return $this->hasMany('App\Models/ActaNota');
    }
}
