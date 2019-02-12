@extends('layouts.admin-main')

@section('content')
  <div id="doctor-add">
    <h2>Agregar Datos del Doctor</h2>
  	<form method="POST" action="/api/doctors">
      <div class="form-group">
        <label for="nombre">Nombre del Doctor</label><span id="requerido">*</span>
        <input type="text" class="form-control" id="nombre" name="nombre" oninvalid="this.setCustomValidity('Introduzca un nombre')" required>
      </div>
      <div class="form-group">
        <label for="nombre_doctor">Especialidad del doctor</label><span id="requerido">*</span>
        <input type="text" class="form-control" id="especialidad" name="especialidad" oninvalid="this.setCustomValidity('Introduzca una especialidad')" required>
      </div>
      <div class="form-group">
        <label for="num_pacientes">Numero de pacientes</label><span id="requerido">*</span>
        <input type="number" class="form-control" id="num_pacientes" name="num_pacientes" oninvalid="this.setCustomValidity('Introduzca un numero de pacientes')" required>
      </div>
      <button type="submit" class="btn btn-primary">Continuar</button>
  </form>
  </div>
@stop