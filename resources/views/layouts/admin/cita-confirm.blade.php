@extends('layouts.admin-main')

@section('content')
  <div class="row">
                <div class="col-lg-8" style="margin: auto">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Confirma tu cita</small></h5>
  
                        </div>
                        <div class="ibox-content">
                             @if (isset($mensaje))
                                  <div class="alert alert-primary" role="alert">
                                  {{$mensaje}}
                                  </div>
                              @endif
                            <div class="row justify-content-end">
                                <div class="col-sm-3">
                                    <form method="POST" action="/api/cita-confirm/{{$id}}">
                                    <div class="input-group"><input placeholder="{{$info->fecha}}" type="text" name="fecha" id="fecha" class="form-control form-control-sm">
                                    <input name="id_paciente" value="{{$info->id_paciente}}" hidden>
                                    <input name="id_doctor" value="{{$info->id_doctor}}" hidden>
                                    <input name="admin" value="{{$info->admin}}" hidden>
                                     <span class="input-group-append"> 
                                    <button type="submit" class="btn btn-sm btn-primary">Ir</button> </span></div>
                                </form>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            @if ($cupos >= 1)
                            <form method="post" name="form-patient" onSubmit="return add_cita()" action="/api/citas" novalidate>
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Cupos disponibles</label>
                                    <div class="col-sm-9"><input type="text" value="{{$cupos}}" class="form-control" disabled></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <input name="id_paciente" value="{{$info->id_paciente}}" hidden>
                                <input name="admin" value="{{$info->admin}}" hidden>
                                <input name="motivo" value="{{$info->motivo}}" hidden>
                                <input name="fecha" value="{{$info->fecha}}" hidden>
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Nombre del doctor</label>
                                    <div class="col-sm-9"><input type="text" value="{{$doctor->nombre}}" class="form-control" disabled></div>
                                    <input name="id_doctor" value="{{$info->id_doctor}}" hidden>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Fecha de la cita</label>
                                    <div class="col-sm-9"><input type="text" value="{{$info->fecha}}" name="fecha" class="form-control" disabled></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Hora de la cita</label>
                                    <div class="col-sm-9"><input type="text" value="{{$doctor->horario}}" name="hora" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/admin/{{$id}}">Cancelar</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Crear cita</button>
                                    </div>
                                </div>
                            </form>
                            @elseif ($cupos == 0)
                                     <form method="post" name="form-patient" onSubmit="return add_cita()" action="/api/citas" novalidate>
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Cupos disponibles</label>
                                    <div class="col-sm-9"><input type="text" value="{{$cupos}}" class="form-control" disabled></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Cupos disponibles</label>
                                    <div class="col-sm-9"><span>No quedan cupos disponibles para el doctor {{$doctor->nombre}} en la fecha indicada, prueba otra fecha</span></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/admin/{{$id}}">Cancelar</a>
                                        <button class="btn btn-primary btn-sm" type="submit" disabled>Crear cita</button>
                                    </div>
                                </div>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                <script>
                  $( function() {
                    $( "#fecha" ).datepicker({ minDate: new Date(), changeMonth: true,changeYear: true});
                  } );
                  </script>
  </div>
@stop