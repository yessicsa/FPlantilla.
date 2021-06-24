<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillalble = [
        'name',
        'apaterno',
        'amaterno',
        'direccion',
        'correo',
        'ruc_number',
        'telefono',
    ];
}
