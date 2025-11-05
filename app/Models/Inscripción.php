<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripción extends Model
{
    use ahasFactory;

    protected $table = 'inscripciones';

    protected $fillable = [
        'estudiante_id',
        'curso_id',
        'fecha_inscripcion',
        'estado',
    ];
}