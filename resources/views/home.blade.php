@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Raquel Morera </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenidos!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('users-section')
<div class= "container">
<a style="margin: 19px;" href="{{ route('productos.index')}}" class="btn btn-primary">Ir a Productos</a>
<a style="margin: 19px;" href="{{ route('usuarios.index')}}" class="btn btn-primary">Ir a Usuarios</a>
<a style="margin: 19px;" href="{{ route('facturas.index')}}" class="btn btn-primary">Ir a Facturas</a>
@endsection


