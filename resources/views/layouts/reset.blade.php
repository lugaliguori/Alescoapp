@extends('layouts.loginmain')

@section('content')

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name" style="text-align: center">Alesco</h1>

            </div>
            <h3>Inserta tu nueva Contraseña</h3>
            <form class="m-t" role="form" method="POST" action="/api/resetPassword">
                 <div class="form-group">
                    <input type="email" class="form-control" placeholder="Correo" value="{{$email}}" disabled>
                    <input type="email" name="email" class="form-control" placeholder="Correo" value="{{$email}}" hidden>
                </div>
                <div class="form-group">
                    <input type="password" name="newPassword" class="form-control" placeholder="Contraseña" required="">
                </div>
                <div class="form-group">
                    <input type="password"  class="form-control" placeholder="confirma Contraseña" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Restablecer Contraseña</button>
            </form>
        </div>
    </div>
@stop