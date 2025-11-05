<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoUpdateRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'nombre' => ['sometimes','required','string','max:120'],
            'curso' => ['sometimes','required','string','max:60'],
            'edad' => ['sometimes','required','integer','between:3,99'],
        ];
    }
}
