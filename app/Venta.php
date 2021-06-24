<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'cliente_id',
        'user_id',
        'fechaCompra',
        'tax',
        'total',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function ventadetalles(){
        return $this->hasMany(VentaDetalle::class);
    }
}
