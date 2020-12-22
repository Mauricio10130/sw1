<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $guarded = [];

    //Un departments se asocia con muchos users
    public function materias()
    {
        return $this->hasMany('App\Models\Materia');
    }
}
