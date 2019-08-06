@extends('layouts.miplantilla')

@section('main')

<br>
  <div class="justify-content">
     <h1 class="display-3">Facturas por Usuarios</h1>
  </div>

  <div class="text-left">
      <a class="btn btn-danger" href="/bills">Volver</a>
   </div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID Usuario</td>
          <td>Nombre Usuario</td>
          <td>Correo </td>
          <td>ID Factura</td>
          <td>Precio total</td>  
        </tr>
    </thead>


    <tbody>
    @foreach($dataBill as $fact)
        <tr>
           <td>{{$fact->id_user}}</td>
           <td>{{$fact->name}}</td>
           <td>{{$fact->email}}</td>
            <td>{{$fact->id}}</td>
            <td>{{$fact->preciototal}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection