    
@extends('layouts.app')

@section('Bodega_Productos')
    <div class="contenedor">
    @foreach($tbl_producto as $producto)
        <div>
           <h2>Nombre </h2>
             <p>{{ $producto -> nombre_producto }}</p>
          <h2>Detalle </h2>
             <p>{{ $producto -> detalle_producto }}</p>
             <p>Modficacion:</p>
          <input type="text" class='modificacionProducto'>
          <button class='btnModificarProducto' idProducto="{{ $producto -> id}}">Modificar</button>
          <button id='btnEliminarProducto' Eliminaridproductoinfo="{{ $producto -> id}}">Eliminar</button> 
        </div>
    @endforeach
    </div>
@endsection

 