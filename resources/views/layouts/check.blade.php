@extends('layouts.loginmain')

@section('content')


    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name" style="text-align: center">Alesco</h1>

            </div>
            <h3>Introduzca su correo para restaurar su contraseña</h3>
            <form class="m-t" role="form" method="POST" action="/api/checkEmail">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Correo" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Recuperar Contraseña</button>
            </form>
        </div>
    </div>
@stop