@extends('layouts.admin-main')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Listado de especialidades de los doctores</h5>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                    	<th>Nombre especialidad</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($especialidades as $especialidad)	
                                    <tr>
                                        <td>{{$especialidad->nombre}}</td>
                                        <td><a href="/especialidades_edit/{{$especialidad->id}}/{{$id}}"><i class="fa fa-edit"></i></a></td>
                                        <td><a href="/especialidades_destroy/{{$especialidad->id}}/{{$id}}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <a href="/especialidad_add/{{$id}}" class="btn btn-w-m btn-info">Agregar Especialidad</a>
                    </div>
                </div>

            </div>
@stop