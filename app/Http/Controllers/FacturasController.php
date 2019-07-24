<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\facturas;
class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $facturas = facturas::all();

        return view('Facturas.index', compact('facturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Facturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factura = facturas::find($id);
        return view('Facturas.edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'id_user'=>'required',
            'preciototal'=>'required'
        ]);
    
        $factura = facturas::find($id);
            $factura->id_user =  $request->get('id_user');
            $factura->preciototal = $request->get('preciototal');
            $factura->save();
    
            return redirect('/facturas')->with('success', 'Factura Actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura = facturas::find($id);
        $factura->delete();

        return redirect('/facturas')->with('success', 'Factura Eliminada!');
    }
}
