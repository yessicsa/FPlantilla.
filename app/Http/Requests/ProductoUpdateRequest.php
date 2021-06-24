<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoUpdateRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' =>'string|required|unique:products,name,'.$this->route('producto')->id.'|max:255',
            'ruc_number'=>'required|string|max:11|min:11|unique:proveedors', 
            'descripcion' =>'nullable|string|max:255',
            'image'=>'required|dimensions:min_width=100,min_height=200',
            'sell_price'=>'required|',
            'category_id'=>'integer|required|exists:App\Category,id',
            'proveedor_id'=>'integer|required|exists:App\Proveedor,id',
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

            'image.required'=>'El campo es requerido',
            'iamge.dimensions'=>'Solo se permiten imagenes de 100x200 px',
            'sell_price.required'=>'El campo es requerido',

            'category_id.integer'=>'El valor tiene que ser entero',
            'category_id.required'=>'El campo es requerido',
            'category_id.exists'=>'La categoria no existe',

            'proveedor_id.integer'=>'El valor tiene que ser entero',
            'proveedor_id.required'=>'El campo es requerido',
            'proveedor_id.exists'=>'El proveedor no existe',
        ];
}
