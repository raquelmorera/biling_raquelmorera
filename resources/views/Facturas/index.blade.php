@extends('layouts.miplantilla')

@section('main')
<div class="col-sm-12">

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div>
@endif
</div>


<div class="row">
<div class="col-sm-12">

    <h1 class="display-3">Facturas</h1>  
    <br>
    <div>
    <a style="margin: 19px;" href="{{route('facturas.create')}}" class="btn btn-primary">Agregar Factura</a>
    <a style="margin: 19px;" href="{{route('home')}}" class="btn btn-primary">Ir a Inicio</a>
    </div>  

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Detalle</td>
          <td>Codigo</td>
          <td>Precio</td>
          <td colspan = 2>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($facturas as $factura)
        <tr>
            <td>{{$factura->id_fact}}</td>
            <td>{{$factura->factura_detalle}} </td>
            <td>{{$factura->factura_cod}}</td>
            <td>{{$factura->factura_precio}}</td>
        
            
            <td>
                <a href="{{ route('facturas.edit',$factura->id_fact)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('facturas.destroy', $factura->id_fact)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection