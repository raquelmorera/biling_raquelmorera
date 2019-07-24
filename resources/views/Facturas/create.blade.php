@extends('layouts.miplantilla')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Crear Facturas</h1>
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
      <form method="post" action="{{ route('facturas.store') }}">
          @csrf
          <div class="form-group">    
              <label for="factura_detalle">Detalle:</label>
              <input type="text" class="form-control" name="factura_detalle"/>
          </div>

        

          <div class="form-group">
              <label for="factura_precio">Precio:</label>
              <input type="text" class="form-control" name="factura_precio"/>
          </div>
                           
          <button type="submit" class="btn btn-success">Agregar Factura</button>
          <a style="margin: 19px;" href="{{ route('facturas.index')}}" class="btn btn-danger">Cancelar</a>
      </form>
     
  </div>
</div>
</div>
@endsection