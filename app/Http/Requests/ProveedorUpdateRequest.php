<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorUpdateRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name'=>'required|string|max:255',
                'apaterno'=>'required|string|max:255',
                'amaterno'=>'required|string|max:255',
                'direccion'=>'nullable|string|max:255',
                'email'=>'required|email|string|max:200|unique:proveedors,email,'.
                $this->route('proveedor')->id.'|max:255',

                'ruc_number'=>'required|string|max:10|min:10|unique:proveedors,ruc_number,'.
                $this->route('proveedor')->id.'|max:10', 

                'telefono'=>'required|string|min:10|unique:proveedors,phone'
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permiten 50 caracteres',
            
            'apaterno.required'=>'Estecampo es requerido',
            'apaterno.string'=>'El valor no es correcto',
            'apaterno.max'=>'Solo se permiten 50 caracteres',

            'amaterno.required'=>'Este campo es requerido',
            'amaterno.string'=>'El valor no es correcto',
            'amaterno.max'=>'Solo se permiten 50 caracteres',

            'direccion.max'=>'Solo se permiten 255 caracteres',
            'direccion.string'=>'El valor no es correcto',

            'email.required'=>'Eesto es un campo requerido',
            'email.email'=>'No es un correo electronico',
            'email.string'=>'El valor no es correcto',
            'email.max'=>'Solo se permiten 255 carcteres',
            'email.unique'=>'Lo sentimos, este correo se encuentra ya registrado',

            'ruc_number.required'=>'Este campo es requerido',
            'ruc_number.string'=>'El valor no es correcto',
            'ruc_number.max'=>'Solo se permiten 10 caracteres',
            'ruc_number.min'=>'Ssolo se requieren 10 caracteres',
            'ruc_number.unique'=>'Ya se encuentrs registrado',

            'telefono.required'=>'Este campo es requerido',
            'telefono.string'=>'El valor no es correcto',
            'telefono.max'=>'Solo se permiten 10 caracteres',
            'telefono.min'=>'Ssolo se requieren 10 caracteres',
            'telefono.unique'=>'Ya se encuentrs registrado',

            'direccion.required'=>'Este campo es requerido',
            'direccion.string'=>'Este campo es requerido',   
        ];

    }
}
