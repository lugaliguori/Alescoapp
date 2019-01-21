@extends('layouts.main')

@section('content')
  <div id="cita-add">
    <h2>Programar Cita</h2>
  	<form method="post" action="/api/citas">
      <div class="form-group">
          <label for="fecha">Fecha de de la cita</label><span id="requerido">*</span>
          <input type="date" class="form-control" name="fecha" id="fecha" required>
      </div>
      <div class="form-group">
        <label for="nombre_paciente">Nombre del paciente</label><span id="requerido">*</span>
        <input type="text" class="form-control" value="{{$patient[0]->nombre}}" disabled>
        <input type="text" class="form-control" name="id_paciente" id="id_paciente" value="{{$patient[0]->id}}" hidden>
      </div>
      <div class="form-group">
        <label for="nombre_doctor">Nombre del doctor</label><span id="requerido">*</span>
        <select class="form-control" name="id_doctor" id="id_doctor" required>
                  @foreach ($doctors as $doctor)
                  <linea>
                    <option    value="{{$doctor->id}}">{{$doctor->nombre}}
                    </option>
                  </linea>
                  @endforeach
                </select>
      </div>
      <button type="submit" class="btn btn-primary">Continuar</button>
  </form>
  </div>
@stop