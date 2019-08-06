<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class ReporteController extends Controller
{

    public function getFacturas()
    {

        $dataBill = DB::table("facturas_productos")
        ->join("tabla_facturas", "facturas_productos.id_fact", "=", "tabla_facturas.id")
        ->select("facturas_productos.*", "tabla_facturas.*")
        ->get();

        return view('reporte.getfacturas',compact('dataBill'));
    }

    public function Facturasbyusers()
    {
        
        $dataBill = DB::table("tabla_facturas")
        ->join("users","tabla_facturas.id_user", "=", "users.id")
        ->select("users.*", "tabla_facturas.*")
        ->get();
        return view('reporte.facturasbyuser',compact('dataBill'));
    }

    public function Facturasbyproductos()
    {
        $dataBill = DB::table("facturas_productos")
        ->join("tabla_facturas", "facturas_productos.id_fact", "=", "tabla_facturas.id")
        ->join("tabla_productos", "facturas_productos.cod_producto", "=", "tabla_productos.cod_producto")
        ->select("facturas_productos.*", "tabla_facturas.*", "tabla_productos.*")
        ->get();

        return view('reporte.facturasbyproductos',compact('dataBill'));
    }


}


