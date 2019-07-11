@extends('layouts.app')

@section('facturas-section')
<div>
    <div class="container">
    <h1>Datos de las facturas</h1>
    
        @foreach($tbl_facturas as $facturas)
            <div>

            <h2>Detalle </h2>
            <p>{{$facturas->factura_detalle}}</p>

            <h2>Código </h2>
            <p>{{$facturas->factura_cod}}</p>

            <h2>Precio </h2>
            <p>{{$facturas->factura_precio}}</p>
                
            <h2>Ingrese nuevo detalle de la Factura:</h2>
                <input type="text" id="facturaModificarDetalle" class="form-control">
               
            <br>
        
            <button id="btnModificarFacturas" class= "btn btn-primary" Modificaridfactura="{{ $facturas->id_fact }}">Modificar</button>
            <button id="btnEliminarFacturas" class= "btn btn-danger" Eliminaridfactura="{{ $facturas->id_fact }}">Eliminar</button>
            <br>
            <br>
            </div>
        @endforeach

    </div>
</div>
@endsection