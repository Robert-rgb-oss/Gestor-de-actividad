<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadUpdateRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'nombre' => ['sometimes','required','string','max:120'],
            'descripcion' => ['sometimes','required','string','max:1000'],
            'dia' => ['sometimes','required','string','in:Lunes,Martes,Miércoles,Jueves,Viernes'],
            'horario' => ['sometimes','required','in:am,pm'],
        ];
    }
}
