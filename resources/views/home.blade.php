@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('users-section')
<div class="container">
    <p>AQUI VA TODA LA INFO DE LOS USUARIOS</p>

    @foreach($users as $user)
        <div>
        <p>{{ $user->name }}</p>
        <button class='btn-user-remove' data-user-id="{{ $user->id }}">ELIMINAR</button>
        </div>
    @endforeach
</div>
@endsection

