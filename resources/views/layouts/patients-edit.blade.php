@extends('layouts.main')

@section('content')


  <div id="patient-edit">
    <h2>Editar datos del paciente</h2>
  	<form method="post" action="/api/patients/{{$info[0]->id}}">
      @method('PUT')
      <div class="form-group" id="add-patient">
        <label for="name">Nombre y Apellido</label><span id="requerido">*</span>
        <input type="text" class="form-control" id="nombre" name ="nombre" placeholder="Inserte nombre y apellido"  value="{{$info[0]->nombre}}" required>
      </div>
      <div class="form-group">
        <label for="fecha_nac">Fecha de nacimiento</label><span id="requerido">*</span>
        <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="{{$info[0]->fecha_nac}}" required>
      </div>
      <span>Sexo</span><span id="requerido">*</span>
      <br>
      <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M" required>
         <label class="form-check-label" for="inlineRadio1">M</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="sexo" id="sexo" value="F">
        <label class="form-check-label" for="inlineRadio2">F</label>
      </div>
      <div class="form-group">
        <label for="procedencia">Estado de procedencia</label><span id="requerido">*</span>
        <input type="text" class="form-control" id="procedencia" name="procedencia" placeholder="Ej: Miranda" value="{{$info[0]->procedencia}}"  required>
      </div>
      <div class="form-group">
        <label for="procedencia">Teléfono del paciente</label><span id="requerido">*</span>
        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="0212 5555555" value="{{$info[0]->telefono}}" required>
      </div>
      <span>Motivo de la cita</span><span id="requerido">*</span>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="motivo" id="motivo" value="Consulta" required>
        <label class="form-check-label" for="motivo">Consulta</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="motivo" id="motivo" value="Bajo Sedacion" >
        <label class="form-check-label" for="motivo">Bajo sedación</label>
      </div>
      <div class="form-group">
        <label for="diagnostico">Diagnóstico</label><span id="requerido">*</span>
        <textarea type="text" class="form-control" id="diagnostico" name="diagnostico" value="{{$info[0]->diagnostico}}" placeholder="Ojo Derecho:" oninvalid="this.setCustomValidity('Por favor llene este campo')" required></textarea>
      </div>
      <span>¿Requiere cirugia?</span><span id="requerido">*</span>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="cirugia" id="cirugia-si" oninvalid="this.setCustomValidity('Por favor llene este campo')" required>
        <label class="form-check-label" for="cirugia">Si</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="cirugia" id="cirugia-no" required>
        <label class="form-check-label" for="cirugia">No</label>
      </div>
      <div class="form-group">
        <label for="seguimiento">Seguimiento en</label><span id="requerido">*</span>
        <input type="text" class="form-control" id="seguimiento" name="seguimiento" value="{{$info[0]->seguimiento}}" placeholder="Ej: 1 semana, 3 meses" required>
      </div>
      <button type="submit" class="btn btn-primary">Continuar</button>
  </form>
  </div>	
@stop