<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoAnimo extends Model
{
    protected $guarded = [];

    //Un estado de animo pertenece a una persona
    public function persona()
    {
        return $this->belongsTo('App\Models\Persona');
    }

}
