@extends('layouts.admin-main')

@section('content')

<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Listado de Doctores</h5>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                    	<th>#</th>
                                    	<th>Nombre del doctor</th>
                                        <th>Apellido del doctor</th>
                                    	<th>Correo</th>
                                    	<th>Especialidad</th>
                                    	<th>Ver datos</th>
                                    	<th>Eliminar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($doctors as $doctor)	
                                    <tr>
                                        <td>{{$doctor->id}}</td>
                                        <td>{{$doctor->nombre}}</td>
                                        <td>{{$doctor->apellido}}</td>
                                        <td>{{$doctor->correo}}</td>
                                        <td>{{$doctor->especialidad}}</td>
                                        <td><a href="/doctores_edit/{{$doctor->id}}/{{$id}}"><i class="fa fa-edit"></i></a></td>
                                        <td><a href="/doctores_destroy/{{$doctor->id}}/{{$id}}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>

                        </div>
                        <a href="/doctores_add/{{$id}}" class="btn btn-w-m btn-info">Agregar Doctor</a>
                    </div>
                </div>

            </div>


@stop