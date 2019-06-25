@extends('layouts.app')

    @section('Bodega_Productos')
        <div class="contenedor">
        @foreach($tbl_producto as $producto)
            <div>
                <p>{{ $producto -> nombre_producto }}</p>
                <p>{{ $producto -> detalle_producto }}</p>
                <p>Modficacion:</p>
                <input type="text" class='modificacionProducto'>
                <button class='btnModificarProducto' idProducto="{{ $producto -> id}}">Modificar</button>
            </div>
        @endforeach
        </div>
    @endsection

