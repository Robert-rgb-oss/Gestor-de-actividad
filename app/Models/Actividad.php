<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected$filiable = ['nombre','descripcion','dia','horario'];

    public function inscripciones(){
        return $this->hasMany(Inscripcion::class);
    }

    public function alumnos(){
        return $this->belongsToMany(Alumno::class, 'inscripciones');
    }
}
