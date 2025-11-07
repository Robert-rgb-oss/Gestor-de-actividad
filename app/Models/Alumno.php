<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'telefono'];

     public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }

    public function actividades(){
        return $this->belongsToMany(Actividad::class, 'inscripciones');
    }
}
