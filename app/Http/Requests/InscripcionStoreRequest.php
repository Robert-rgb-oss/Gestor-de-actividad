<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'actividad_id' => ['required','integer','exists:actividades,id'],
        ];
    }
}
