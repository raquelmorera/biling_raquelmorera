<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller 
{

  public function consultarUsers()
  {
      $users = DB::select('select * from users');
      return view('Usuarios', ['users' => $users]);
  }

  public function deleteUser(Request $request){
    DB::select('DELETE FROM users WHERE id='.$request->id.'');
    
    return 200;
  }

  public function updateUser(Request $request){
    DB::table('users')
        ->where('id', $request->id)
        ->update(['name' => $request->txtNombreUser , 'email' =>$request->txtEmailUser]);
    return 200;
}

}

