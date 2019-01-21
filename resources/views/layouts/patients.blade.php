@extends('layouts.main')

@section('content')
	<h3>Listado de pacientes</h3>
	<div id = "patients">
		<table class="table table-hover table-bordered table-dark table-responsive-sm">
			<thead>
				<tr>
					<th style="width: 10%" scope="col">#</th>
					<th style="width: 60%" id= "nombre" scope="col-6">Nombre</th>
					<th style="width: 5%" id="editar" scope="col">Editar</th>
					<th style="width: 5%" id="ver" scope="col">Eliminar</th>
					<th style="width: 20%" id="ver" scope="col">Programar cita</th>
				</tr>	
			</thead>
			<tbody>
				<tr>
					@foreach ($patients as $patient)
					<option>
						<td>{{$patient->id}}</td>
						<td>{{$patient->nombre}}</td>	
						<td><a href="/pacientes_edit/{{$patient->id}}"><i class="fas fa-edit"></i></a></td>
						<td><a href="/pacientes_destroy/{{$patient->id}}"><i class="fas fa-trash"></i></a></td>
						<td><a href="/citas_add/{{$patient->id}}"><i class="fas fa-user-clock"></i></a></td>

				</tr>
					</option>
			@endforeach
			</tbody>
		</table>
		<a class="btn btn-secondary" href="pacientes_add">Agregar Paciente</a>	
	</div>	
@stop