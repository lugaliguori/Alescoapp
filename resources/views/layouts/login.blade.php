@extends('layouts.loginmain')

@section('content')

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div class="row" style="justify-content: center" >
                <img src="{{  secure_asset('images/alescologo.jpg') }}" style="margin-bottom: 10px">
            </div>
            <h3>Bienvenido al módulo de citas</h3>
            <form class="m-t" role="form" method="POST" action="/api/login">
                @if (isset($message))
                    <div class="alert alert-danger" role="alert">
                      {{$message}}
                    </div>
                @endif
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Correo" required="">
                </div>
                <div class="form-group">
                    <input type="password"  name="password" class="form-control" placeholder="Contraseña" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Inicio de Sesión</button>

                <a href="/checkmail"><small>¿Olvidó su contraseña?</small></a>
                <p class="text-muted text-center"><small>¿No tienes cuenta? ¡Registrate!!</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/pacientes_add">Crea una Cuenta</a>
            </form>
        </div>
    </div>
@stop