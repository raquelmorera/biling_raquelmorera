<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
     // le dice al modelo como se llama la tabla con la que va a trabajar
     protected $table = 'users'; 


     //si la tabla no tiene los campos de tiempo, hace que el modelo entienda que no los usa
     public $timestamps = false;
 
     //verifica que los campos de los que se va a capturar informacion existan en la base de datos
     protected $fillable =[
 
     'name',
     'email',
     'email_verified_at',
     'detalle_producto',
     'password',
 
     ];
 
}
