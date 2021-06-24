<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'provider_id',
        'user_id',
        'fechaCompra',
        'tax',
        'total',
        'status',
        'total',
        'picture',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }
    public function compradetalle(){
        return $this->hasMany(CompraDetalle::class);
    }
}
