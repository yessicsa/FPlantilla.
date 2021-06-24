<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'imagen',
        'stock',
        'sell_price',
        'status',
        'category_id',
        'proveedor_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }


}
