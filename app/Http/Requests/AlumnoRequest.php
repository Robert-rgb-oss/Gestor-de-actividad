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
            'edad' => ['required','integer','between:3,99'],
        ];
    }
}
