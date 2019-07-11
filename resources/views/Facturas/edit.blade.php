@extends('layouts.miplantilla') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar Facturas</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('facturas.update', $factura->id_fact) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="factura_detalle">Detalle:</label>
                <input type="text" class="form-control" name="factura_detalle" value={{ $factura->factura_detalle }} />
            </div>

            <div class="form-group">
                <label for="factura_cod">Codigo:</label>
                <input type="text" class="form-control" name="factura_cod" value={{ $factura->factura_cod }} />
            </div>

            <div class="form-group">
                <label for="factura_precio">Detalle:</label>
                <input type="text" class="form-control" name="factura_precio" value={{ $factura->factura_precio }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a style="margin: 19px;" href="{{ route('facturas.index')}}" class="btn btn-danger">Cancelar</a>
  </div>
        </form>
    </div>
</div>
@endsection