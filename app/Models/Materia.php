<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $guarded = [];

    //Una materia esta en un nivel
    public function nivel()
    {
        return $this->belongsTo('App\Models\Nivel');
    }
}
