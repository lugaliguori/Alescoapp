@extends('layouts.admin-main')

@section('content')
  <div id="doctor-add">
    <h2>Observaciones del paciente {{$info[0]->nombre}}</h2>
  	<form method="POST" action="/api/doctors">
      <div class="form-group">
        <label for="nombre">Fecha de la observacion</label><span id="requerido">*</span>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="num_pacientes">Numero de pacientes</label><span id="requerido">*</span>
        <input type="number" class="form-control" id="num_pacientes" name="num_pacientes" required>
      </div>
      <button type="submit" class="btn btn-primary">Continuar</button>
  </form>
  </div>
@stop