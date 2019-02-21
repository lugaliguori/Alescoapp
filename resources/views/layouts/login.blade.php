@extends('layouts.loginmain')

@section('content')

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div class="row" style="justify-content: center" >
                <img src="{{ asset('images/alescologo.jpg') }}">
            </div>
            <h3>Bienvenido al módulo de citas</h3>
            <form class="m-t" role="form" method="POST" action="/api/login">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Correo" required="">
                </div>
                <div class="form-group">
                    <input type="password"  name="password" class="form-control" placeholder="Contraseña" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Inicio de Sesión</button>

                <a href="/checkmail"><small>¿Olvido su contraseña?</small></a>
                <p class="text-muted text-center"><small>¿Eres administrador?<a href="/admin"> Clickea aca</a></small></p>
                <p class="text-muted text-center"><small>¿No tienes cuenta? ¡Registrate!!</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/pacientes_add">Crea una Cuenta</a>
            </form>
        </div>
    </div>
@stop