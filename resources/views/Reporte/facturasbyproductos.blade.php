@extends('layouts.miplantilla')

@section('main')

<br>

<div class="d-flex justify-content-center">
    <h1 class="display-4">Facturas por Producto</h1>
</div>

<div class="text-right">
    <a class="btn btn-primary" href="/Reporte"> Regresar</a>
</div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID Factura</td>
          <td>Numero de Factura</td>
          <td>Codigo del Producto</td>
          <td>Fecha de Compra</td>
          <td>ID Usuario</td>
          <td>Total Pagado</td>
          <td>Nombre del Producto</td>
          <td>Detalle del Producto</td>
          <td>Precio del Producto</td>
        </tr>
    </thead>
    <tbody>
    @foreach($dataBill as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            <td>{{$bill->id_fact}}</td>
            <td>{{$bill->cod_producto}}</td>
            <td>{{$bill->created_at}}</td>
            <td>{{$bill->id_user}}</td>
            <td>{{$bill->preciototal}}</td>
            <td>{{$bill->nombre_producto}}</td>
            <td>{{$bill->detalle_producto}}</td>
            <td>{{$bill->precio_producto}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection