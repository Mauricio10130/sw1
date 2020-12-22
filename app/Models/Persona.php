<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $guarded = [];

    //Un usuario está en un departamento
    public function tipoUsuario()
    {
        return $this->belongsTo('App\Models\TipoUsuario');
    }

    //Una persona es un Usuario
    public function users()
    {
        return $this->hasOne('App\Models\User');
    }

    //Una persona tiene muchos estados de Ánimos
    public function estadoAnimo()
    {
        return $this->hasMany('App\Models\EstadoAnimo');
    }

    //Una persona es un estudiante
    public function estudiantes()
    {
        return $this->belongsTo('App\Models\Estudiante');
    }

    //Una persona es un profesor
    public function profesores()
    {
        return $this->belongsTo('App\Models\Profesor');
    }
}
