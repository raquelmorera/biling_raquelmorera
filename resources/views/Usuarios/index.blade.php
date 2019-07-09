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

    <h1 class="display-3">Usuarios</h1>  
    <br>
    <div>
    <a style="margin: 19px;" href="{{ route('usuarios.create')}}" class="btn btn-primary">Agregar Usuarios</a>
    <a style="margin: 19px;" href="{{ route('home')}}" class="btn btn-primary">Ir a Inicio</a>
    </div>  

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Correo</td>
          <td colspan = 2>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}} </td>
            <td>{{$usuario->email}}</td>
            
           
            
            <td>
                <a href="{{ route('usuarios.edit',$usuario->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('usuarios.destroy', $usuario->id)}}" method="post">
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