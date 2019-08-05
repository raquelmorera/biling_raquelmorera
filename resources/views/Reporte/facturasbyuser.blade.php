@extends('layouts.miplantilla')

@section('main')

<br>
<div class="d-flex justify-content-center">
    <h1 class="display-4">Facturas por Usuarios</h1>
</div>

<div class="text-right">
    <a class="btn btn-primary" href="/Reporte">Regresar</a>
</div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID Factura</td>
          <td>Correo </td>
          <td>Nombre Usuario</td>
          <td>ID Usuario</td>
          <td>Precio total</td>  
        </tr>
    </thead>
    <tbody>
    @foreach($dataBill as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            <td>{{$bill->email}}</td>
            <td>{{$bill->name}}</td>
            <td>{{$bill->id_user}}</td>
            <td>{{$bill->preciototal}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection