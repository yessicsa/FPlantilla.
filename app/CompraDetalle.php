<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraDetalle extends Model
{
    protected $fillable = [
        'shopping_id',
        'producto_id',
        'cantidad',
        'precio',
    ];
    public function compra(){
        return $this->belongsTo(Prdoucto::class);
    }
}
