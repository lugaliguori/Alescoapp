@extends('layouts.admin-main')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Listado de Pacientes</h5>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                    	<th>#</th>
                                    	<th>Nombre del paciente</th>
                                    	<th>Correo</th>
                                    	<th>Telefono<th>
                                    	<th>Ver datos</th>
                                    	<th>Eliminar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($patients as $patient)	
                                    <tr>
                                        <td>{{$patient->id}}</td>
                                        <td>{{$patient->nombre}}</td>
                                        <td>{{$patient->correo}}</td>
                                        <td>{{$patient->telefono}}</td>
                                        <td>	</td>
                                        <td><a href="/pacientes_edit/{{$patient->id}}/{{$id}}"><i class="fa fa-edit"></i></a></td>
                                        <td><a href="/pacientes_destroy/{{$patient->id}}/{{$id}}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
@stop