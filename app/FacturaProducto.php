<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacturaProducto extends Model
{
    //
    protected $table = 'facturas_productos';
    protected $fillable = [

        'id_fact',
        'cod_producto'
    ];
}
