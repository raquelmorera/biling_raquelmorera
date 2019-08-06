@extends('layouts.miplantilla')

@section('main')
<div class="col-sm-12">
<div>
    <br>
    <h1 class="display-3">Reportes</h1>
  </div>
  
    <br>

    <div>
    <a style="margin: 19px;" href="{{ route('home')}}" class="btn btn-primary">Ir a Inicio</a>
    </div>


    <div class="row justify-content-center">
      
        <a style="margin: 30px;" href="verfacturas" class="btn btn-warning ">Facturas</a>
        <a style="margin: 30px;" href="verfacturasbyusers" class="btn btn-warning ">Por Usuarios</a>
        <a style="margin: 30px;" href="verfacturasbyproductos" class="btn btn-warning ">Por Producto</a>
    </div>
    
</div>
<br>
<br>
<br>



@endsection