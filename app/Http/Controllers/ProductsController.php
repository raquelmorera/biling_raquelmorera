<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    
    public function consultarProductos()
    {
        $producto = DB::select('select * from tbl_producto');
        return view('BodegaProducto', ['tbl_producto' => $producto]);
    }

    public function updateProducto(Request $request){
        DB::table('tbl_producto')
            ->where('id', $request->id)
            ->update(['detalle_producto' => $request->modificacion]);
        return 200;
    }

    public function deleteProducto(){
        DB::select('DELETE FROM tbl_productos WHERE id='.$request->id.'');
        return 200;
    }
}
