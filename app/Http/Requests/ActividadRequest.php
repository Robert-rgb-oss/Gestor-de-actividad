<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'nombre' => ['required','string','min:3','max:120'],
            'descripcion' => ['required'],
            'dia' => ['required','in:Lunes,Martes,Miercoles,Jueves,Viernes'],
            'hora_inicio' => ['required'],
            'hora_fin' => ['required','after:hora_inicio'],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Es nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser un texto.',
            'nombre.min' => 'El nombre debe tener mínimo 3 caracteres.',
            'nombre.max' => 'El nombre no debe superar los 120 caracteres.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'dia.required' => 'El día es obligatorio.',
            'dia.in' => 'El día debe ser: lunes, martes, miercoles, jueves o viernes.',
            'hora_inicio.required' => 'Hora requerida.',
            'hora_fin.required' => 'Hora fin requerida.',
            'hora_fin.after' => 'Hira final debe ser posterior a la hora inicio.',
        ];
    }
}