@extends('layouts.miplantilla')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Crear Productos</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('productos.store') }}">
          @csrf
          <div class="form-group">    
              <label for="cod_producto">Codigo:</label>
              <input type="text" class="form-control" name="cod_producto"/>
          </div>

          <div class="form-group">
              <label for="nombre_producto">Nombre:</label>
              <input type="text" class="form-control" name="nombre_producto"/>
          </div>

          <div class="form-group">
              <label for="detalle_producto">Detalle:</label>
              <input type="text" class="form-control" name="detalle_producto"/>
          </div>
          <div class="form-group">
              <label for="precio_producto">Precio:</label>
              <input type="text" class="form-control" name="precio_producto"/>
          </div>
                           
          <button type="submit" class="btn btn-success">Agregar Producto</button>
          <a style="margin: 19px;" href="{{ route('productos.index')}}" class="btn btn-danger">Cancelar</a>
      </form>
     
  </div>
</div>
</div>
@endsection