<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActaNota extends Model
{
    protected $guarded = [];

    //Una acta_nota pertenece a un estudiantes
    public function estudiantes()
    {
        return $this->belongsTo('App\Models\Estudiante');
    }

}
