<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadStoreRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'nombre' => ['required','string','max:120'],
            'descripcion' => ['required','string','max:1000'],
            'dia' => ['required','string','in:Lunes,Martes,Miércoles,Jueves,Viernes'],
            'horario' => ['required','in:am,pm'],
        ];
    }
}
