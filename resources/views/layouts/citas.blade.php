@extends('layouts.main')

@section('content')
<div class="container">
		<div class="row align-items-start" id="titulo">
			<div class="col-5">
				<h3>Citas del dia</h3>
			</div>
			<div class="col-7">
				<form class="form-inline" method="POST" action="/api/cita">
				  <div class="form-group sm-3">
				    <label for="fecha" style="margin-right: 5px">Fecha</label>
				    <input type="date" class="form-control" id="dia" name="dia" value="{{$infos[0]->fecha}}">
				  </div>
				  <div class="col-auto">
				  <button type="submit" id="boton" class="btn btn-primary sm-2">ir a</button>
				</div>
				</form>
			</div>
		</div>
		<div class="row" id = "table">
		<table class="table table-hover table-bordered table-dark table-responsive-sm">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Doctor</th>
					<th style="text-align: center" scope="col">No se presento</th>
				</tr>	
			</thead>
			<tbody>
				<tr>
					@foreach ($infos as $info)
					<option>
						<td>{{$info->nombre_paciente}}</td>
						<td>{{$info->nombre}}</td>
						<td><input style="align-self: center;" value="{{$info->id}}" type="radio"></td>
					</tr>		
				</option>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop