<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
        
    }

    public function rules()
    {
        return [
            
            'nombre' =>'required|string|max:50',
            'descripcion' =>'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permiten 50 caracteres',
            'descripcion.string'=>'El valor no es correcto',
            'descripcion.max'=>'Solo se permiten 255 caracteres',
        ]

    }

}
