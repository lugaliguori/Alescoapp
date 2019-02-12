@extends('layouts.loginmain')

@section('content')

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name" style="text-align: center">Alesco</h1>

            </div>
            <h3>Bienvenido al modulo de citas</h3>
            <form class="m-t" role="form" method="POST" action="/api/loginAdmin">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Correo" required="">
                </div>
                <div class="form-group">
                    <input type="password"  name="password" class="form-control" placeholder="Contraseña" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Inicio de Sesion</button>

                <a href="/checkmail"><small>Olvido su contraseña?</small></a>
                <p class="text-muted text-center"><small>Usuario regular?<a href="/"> Clickea Aca</a></small></p>
                <p class="text-muted text-center"><small>No tienes cuenta? Registrate!!</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/pacientes_add">Crea una Cuenta</a>
            </form>
        </div>
    </div>
@stop