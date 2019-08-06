@extends('layouts.miplantilla')

@section('main')

<br>

  <div class="justify-content">
      <h1 class="display-3">Facturas por Producto</h1>
  </div>

  <div class="text-left">
      <a class="btn btn-danger" href="/bills"> Volver</a>
  </div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID Factura</td>
          <td>#Factura</td>
          <td>Codigo del Producto</td>
          <td>Nombre del Producto</td>
          <td>Detalle del Producto</td>
          <td>Precio del Producto</td>
          <td>Total Pagado</td>
        </tr>
    </thead>
    <tbody>
    @foreach($dataBill as $fact)
        <tr>
            <td>{{$fact->id}}</td>
            <td>{{$fact->id_fact}}</td>
            <td>{{$fact->cod_producto}}</td>
            <td>{{$fact->nombre_producto}}</td>
            <td>{{$fact->detalle_producto}}</td>
            <td>{{$fact->precio_producto}}</td>
            <td>{{$fact->preciototal}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection