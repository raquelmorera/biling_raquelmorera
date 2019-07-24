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

    <h1 class="display-3">Productos</h1>  
    <br>
    <div>
    <a style="margin: 19px;" href="{{ route('productos.create')}}" class="btn btn-primary">Agregar Producto</a>
    <a style="margin: 19px;" href="{{ route('home')}}" class="btn btn-primary">Ir a Inicio</a>
    </div>  

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Codigo</td>
          <td>Nombre</td>
          <td>Detalle</td>
          <td>Precio</td>
          <td colspan = 2>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->cod_producto}} </td>
            <td>{{$producto->nombre_producto}}</td>
            <td>{{$producto->detalle_producto}}</td>
            <td>{{$producto->precio_producto}}</td>
            
            <td>
                <a href="{{ route('productos.edit',$producto->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('productos.destroy', $producto->id)}}" method="post">
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