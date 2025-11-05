<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InscripcionStoreRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'alumno_id' => ['required','integer','exists:alumnos,id'],
            'actividad_id' => [
                'required',
                'integer',
                'exists:actividades,id',
                Rule::unique('inscripciones')->where(function ($query)  =>
                    $query->where('alumno_id', $this->'alumno_id')
            ),
                ],
        ];
    }

    public function message(): array
    {
        return [
            'actividad_id.unique' => 'El alumno ya está inscrito en esta actividad.',
        ];
    }
}
