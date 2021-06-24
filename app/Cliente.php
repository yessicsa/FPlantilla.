<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre',
        'apaterno',
        'amaterno',
        'email',
        'dni',
        'ruc',
        'direccion',
        'telefono',
    ];

}
