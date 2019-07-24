<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              
        $productos = productos::all();

        return view('Productos.index', compact('productos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cod_producto'=>'required',
            'nombre_producto'=>'required',
            'detalle_producto'=>'required',
            'precio_producto' =>'required'
        ]);

        $producto = new productos([
            'cod_producto' => $request->get('cod_producto'),
            'nombre_producto' => $request->get('nombre_producto'),
            'detalle_producto' => $request->get('detalle_producto'),
            'precio_producto' => $request->get('precio_producto')
           
        ]);
        $producto->save();
        return redirect('/productos')->with('success', 'Product saved!');


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
     * @param  int  $id_prod
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = productos::find($id);
        return view('Productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
        'cod_producto'=>'required',
        'nombre_producto'=>'required',
        'detalle_producto'=>'required',
        'precio_producto' =>'required'
    ]);

    $producto = productos::find($id);
        $producto->cod_producto =  $request->get('cod_producto');
        $producto->nombre_producto = $request->get('nombre_producto');
        $producto->detalle_producto = $request->get('detalle_producto');
        $producto->precio_producto = $request->get('precio_producto');
        $producto->save();

        return redirect('/productos')->with('success', 'Producto Actualizado!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = productos::find($id);
        $producto->delete();

        return redirect('/productos')->with('success', 'Producto Eliminado!');
    }
}
