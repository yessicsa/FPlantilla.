<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nombre'=>'string|required|max:255',
            'apaterno'=>'string|required|max:255',
            'amaterno'=>'string|required|max:255',
            'email'=>'string|required|unique:clientes|max:255|email:ric,dns',
            'dni'=>'string|required|unique:clientes|max:8',
            'ruc'=>'string|required|unique:clientes|max:10',
            'direccion'=>'string|required|max:255',
            'telefono'=>'string|required|unique:clientes|max:10',
        ];
    }
    public function messages()
    {
        return[
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permiten 50 caracteres',

            'apaterno.required'=>'Este campo es requerido',
            'apaterno.string'=>'El valor no es correcto',
            'apaterno.max'=>'Solo se permiten 50 caracteres',

            'amaterno.required'=>'Este campo es requerido',
            'amaterno.string'=>'El valor no es correcto',
            'amaterno.max'=>'Solo se permiten 50 caracteres',
            
            'dni.string'=>'El valor no es correcto',
            'dni.required'=>'Este campo es requerido',
            'dni.unique'=>'Este DNI ya se encuentra registrado',
            'dni.min'=>'Se requieren solo 8 caracteres',
            'dni.max'=>'Solo se permiten 8 caracteres',

            'ruc.string'=>'El valor no es correcto',
            'ruc.unique'=>'El numero de RUC ya se encuentra registrado',
            'ruc.min'=>'Se requieren 10 caracteres',
            'ruc.max'=>'Solo se permiten 10 caracteres',

            'direccion.string'=>'El valor no es correcto',
            'direccion.max'=>'Solo se permiten 255 caracteres',

            'telefono.string'=>'El valor no es correcto',
            'telefono.unique'=>'Este numero ya se encuentra registrado',
            'telefono.min'=>'Se requiere solo 10 caracteres',
            'telefono.max'=>'Solo se permiten 10 caracteres',
        ];

    }
}
