@extends('layouts.main')

@section('content')

	<h3>Listado de Doctores</h3>

	<div id = "doctors">
		<table class="table table-hover table-bordered table-dark table-responsive-sm">
			<thead>
				<tr>
					<th style="width: 10%" scope="col">#</th>
					<th style="width: 35%" id= "nombre" scope="col-6">Nombre</th>
					<th style="width: 35%" id="especialidad" scope="col">Especialidad</th>
					<th style="width: 15%" id="editar" scope="col">Editar</th>
					<th style="width: 10%" id="eliminar" scope="col">Eliminar</th>
				</tr>	
			</thead>
			<tbody>
				<tr>
					@foreach ($doctors as $doctor)
						<td>{{$doctor->id}}</td>
						<td>{{$doctor->nombre}}</td>
						<td>{{$doctor->especialidad}}
						<td><a href="/doctores_edit/{{$doctor->id}}"><i class="fas fa-edit"></i></a></td>
						<td><a href="/doctores_destroy/{{$doctor->id}}"><i class="fas fa-trash"></i></a></td>
				</tr>
					@endforeach	
			</tbody>
		</table>
		<a href="/doctores_add" class="btn btn-secondary">Agregar Doctor</a>	
	</div>	


@stop