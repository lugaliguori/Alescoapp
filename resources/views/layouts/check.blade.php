@extends('layouts.loginmain')

@section('content')


    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <div class="row" style="justify-content: center" >
                     <!--
                     <img src="{{  secure_asset('images/alescologo.jpg') }}" style="margin-bottom: 10px">
                    -->
                     <img src="{{  asset('images/alescologo.jpg') }}" style="margin-bottom: 10px">
                 </div>

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