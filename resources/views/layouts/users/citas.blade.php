@extends('layouts.main')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Tus Citas </h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row justify-content-end">
                                <div class="col-sm-3">
                                	<form method="POST" action="/api/cita">
                                		<input placeholder="ir a fecha" type="text" name="id" id="id" value="{{$id}}"" class="form-control form-control-sm" hidden>
                                    <div class="input-group"><input placeholder="ir a fecha" type="text" name="fecha" id="fecha" class="form-control form-control-sm"> <span class="input-group-append"> <button type="submit" class="btn btn-sm btn-primary">Ir
                                    </button> </span></div>

                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                    	<th>Nombre del paciente</th>
                                    	<th>Fecha</th>
                                    	<th>Nombre doctor</th>
                                    	<th>Motivo</th>
                                    	<th>Cancelar cita</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($infos as $info)	
                                    <tr>
                                        <td>{{$info->nombre_paciente}}</td>
                                        <td>{{$info->fecha}}</td>
                                        <td>{{$info->nombre}}</td>
                                        <td>{{$info->motivo}}</td>
                                        <td><a href="/citas_destroy/{{$info->fecha}}/{{$info->id}}/{{$info->id_doc}}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    @endforeach
                            </div>

                        </div>
                    </div>
                </div>

            </div>
          <script>
          $( function() {
            $( "#fecha" ).datepicker({ minDate: new Date()});
          } );
          </script>
@stop