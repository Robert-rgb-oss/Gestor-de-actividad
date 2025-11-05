<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'telefono'];

    public function actividades(){
        return $this->belongsToMany(Actividad::class, 'inscripciones');
    }
}
