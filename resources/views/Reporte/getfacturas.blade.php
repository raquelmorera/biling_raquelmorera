@extends('layouts.miplantilla')

@section('main')

<br>
<div>
    <div class="justify-content">
        <h1 class="display-3">Detalle de Facturas</h1>
    </div>
   </div>
    
    <div class="text-left">
        <a class="btn btn-danger" href="/bills">Volver</a>
    </div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>#Factura</td>
          <td>Codigo del Producto</td>
          <td>Precio total</td>  
        </tr>
    </thead>
    <tbody>
    @foreach($dataBill as $fact)
        <tr>
            <td>{{$fact->id}}</td>
            <td>{{$fact->id_fact}}</td>
            <td>{{$fact->cod_producto}}</td>
            <td>{{$fact->preciototal}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection