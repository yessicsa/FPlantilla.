<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
    protected $fillable = [
        'sale_id',
        'producto_id',
        'cantidad',
        'precio',
        'total',
        'status',
    ];
    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
