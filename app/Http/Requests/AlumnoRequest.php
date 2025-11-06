<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'nombre' => ['required','string','max:120'],
            'curso' => ['required','string','max:60'],
            'edad' => ['required','integer','between:3,18'],
        ];
    }

    public function message(){
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser un texto.',
            'nombre.min' => 'El nombre debe tener minimo 3 caracteres.',
            'nombre.max' => 'El nombre no debe superar los 120 caracteres.',
            'curso.required' => 'El curso es obligatorio.',
            'curso.string' => 'El curso debe ser un texto.',
            'curso.max' => 'El curso no debe superar los 60 caracteres.',
            'edad.required' => 'La edad es obligatoria.',
            'edad.integer' => 'La edad debe ser un número entero.',
            'edad.between' => 'La edad debe estar entre 3 y 18 años.',
        ];
    }
}
