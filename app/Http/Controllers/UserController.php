<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller 
{
  public function deleteUser(Request $request){
    DB::select('DELETE FROM users WHERE id='.$request->id.'');
    
    return 200;
  }
  
  public function updateProducto(Request $request){

    //DB:: UPDATE ('UPDATE tbl_producto WHERE id= '.$request->id. ''); 
  
    DB::table('tbl_producto')
    ->where('user_id', 1)
    ->update(['username' => $username, 'status' => $status]);
    return 200; 
  }

}

