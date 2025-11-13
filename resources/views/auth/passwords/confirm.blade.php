@extends('layouts.app_authentication')

@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><b>{{ config('app.name', 'Laravel') }}</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Confirmar Contraseña</p>

            <p>Primero Confirma Tu Contraseña Y Luego Inicia Sesion</p>

            <form action="{{ route('password.confirm') }}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Confirmar Contraseña</button>
                </div>
            </form>

            <p class="mt-3 mb-1">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Olvidaste Tu Contraseña?</a>
                @endif
            </p>
            <p class="mb-0">
                <a href="{{ route('login') }}">Volver A Iniciar Sesion</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection