@extends('layouts.main')

@section('content')
  <div id="doctor-add">
    <h2>Datos del Doctor</h2>
  	<form method="POST" action="/api/doctors/{{$info[0]->id}}">
      @method('PUT')
      <div class="form-group">
        <label for="nombre">Nombre del Doctor</label><span id="requerido">*</span>
        <input type="text" class="form-control" id="nombre" name="nombre" oninvalid="this.setCustomValidity('Introduzca un nombre')" value="{{$info[0]->nombre}}" required>
      </div>
      <div class="form-group">
        <label for="nombre_doctor">Especialidad del doctor</label><span id="requerido">*</span>
        <input type="text" class="form-control" id="especialidad" name="especialidad" oninvalid="this.setCustomValidity('Introduzca una especialidad')" value="{{$info[0]->especialidad}}" required>
      </div>
      <div class="form-group">
        <label for="num_pacientes">Numero de pacientes</label><span id="requerido">*</span>
        <input type="number" class="form-control" id="num_pacientes" name="num_pacientes" oninvalid="this.setCustomValidity('Introduzca un numero de pacientes')" value="{{$info[0]->num_pacientes}}" required>
      </div>
      <button type="submit" class="btn btn-primary">Continuar</button>
  </form>
  </div>
@stop