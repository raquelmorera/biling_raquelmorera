<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facturas extends Model
{
      // le dice al modelo como se llama la tabla con la que va a trabajar
      protected $table = 'tbl_facturas'; 


      //si la tabla no tiene los camos de tiempo, hace que el modelo entienda que no los usa
      public $timestamps = false;
  
      //verifica que los campos de los que se va a capturar informacion existan en la base de datos
      protected $fillable =[
  
      'factura_detalle',
      'factura_cod',
      'factura_precio'
      
      ];
}
