@extends('layouts.miplantilla') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar Usuarios</h1>

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
        <form method="post" action="{{ route('usuarios.update', $usuario->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" value={{ $usuario->name }} />
            </div>

            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="text" class="form-control" name="email" value={{ $usuario->email }} />
            </div>

            <div class="form-group">
                <label for="email_verified_at">Verifique:</label>
                <input type="text" class="form-control" name="email_verified_at" value={{ $usuario->email_verified_at }} />
            </div>
            <div class="form-group">
                <label for="password">Contrasena:</label>
                <input type="text" class="form-control" name="password" value={{ $usuario->password }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a style="margin: 19px;" href="{{ route('usuarios.index')}}" class="btn btn-danger">Cancelar</a>
  </div>
        </form>
    </div>
</div>
@endsection