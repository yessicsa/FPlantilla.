<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'apaterno',
        'amaterno',
        'direccion',
        'correo',
        'ruc_number',
        'telefono',
    ];
    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
