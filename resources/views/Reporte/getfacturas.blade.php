@extends('layouts.miplantilla')

@section('main')

<br>
<div>
    <div class=" d-flex justify-content-center">
        <h1 class="display-4">Detalle de Facturas</h1>
    </div>
</div>
    
    <div class="text-right">
        <a class="btn btn-primary" href="/Reporte">Regresar</a>
    </div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Numero de Factura</td>
          <td>Codigo del Producto</td>
          <td>ID Usuario </td>
          <td>Precio total</td>  
        </tr>
    </thead>
    <tbody>
    @foreach($dataBill as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            <td>{{$bill->id_fact}}</td>
            <td>{{$bill->cod_producto}}</td>
            <td>{{$bill->id_user}}</td>
            <td>{{$bill->preciototal}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection