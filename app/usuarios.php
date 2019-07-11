<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
     
     // le dice al modelo como se llama la tabla con la que va a trabajar
     protected $table = 'users'; 

 
     //verifica que los campos de los que se va a capturar informacion existan en la base de datos
     protected $fillable = [
          'name', 'email', 'password',
      ];

      protected $hidden = [
          'password', 'remember_token',
      ];
  
      /**
       * The attributes that should be cast to native types.
       *
       * @var array
       */
      protected $casts = [
          'email_verified_at' => 'datetime',
      ];
}
