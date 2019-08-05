@extends('layouts.miplantilla')

@section('main')

<div>
    <br>
    <h1 class="d-flex justify-content-center display-3">Facturación</h1>
</div>
<hr>
<div class="text-center">
    <br>
    <div class="d-flex justify-content-around">
        <a href="viewBills" class="btn btn-info btn-lg">Facturas</a>
        <a href="viewBillsByUser" class="btn btn-info btn-lg">Facturas por Usuarios</a>
        <a href="viewBillsbyProduct" class="btn btn-info btn-lg">Facturas por Producto</a>
    </div>
    
</div>
<br>
<br>
<br>

<div class= "fixed-bottom">
<a href="/home" class="btn btn-primary">Inicio</a>
</div>

@endsection