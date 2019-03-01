@extends('layouts.admin-main')

@section('content')
  <div class="row">
                <div class="col-lg-8" style="margin: auto">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Programa tu cita</small></h5>
  
                        </div>
                        <div class="ibox-content">
                            <form method="post" name="form-patient" onSubmit="return add_cita()" action="/api/cita-confirm/{{$id}}" novalidate>
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Nombre</label>

                                    <div class="col-sm-9"><select class="form-control" name="id_paciente" id="id_paciente" required></div>
                                        @foreach ($patients as $patient)
                                        <linea>
                                          <option value="{{$patient->id}}">{{$patient->nombre}}</option>
                                        </linea>
                                        @endforeach
                                        </select>  
                                 </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Fecha de la cita</label>
                                     <div class="col-sm-9"><input type="text" name="fecha" id="fecha" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-3 col-form-label">Doctor</label>

                                <div class="col-sm-9"><input type="text" name="name" class="form-control" value="{{$doctor->nombre}}, {{$doctor->especialidad}}" disabled></div>
                                <div class="col-sm-9"><input type="text" name="id_doctor" class="form-control" value="{{$doctor->id}}" hidden></div>
                                <input name="admin" value="{{$administrador}}" hidden>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-3 col-form-label">Motivo de la cita</label>

                                    <div class="col-sm-9"><label>
                                        <input type="radio" name="motivo" value="Consulta" required> Consulta </label> <label>
                                        <input type="radio" name="motivo" value="Cirugía"> Cirugía </label></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/index/{{$id}}">Cancelar</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Siguiente</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if (isset($cupos))
                <script>
                $(function() {
                $("#myModal").modal();//if you want you can have a timeout to hide the window after x seconds
                });
                </script>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Revisa los datos de la cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                            <div class="ibox-content" style="border-style: none none none">
                                 @if (isset($mensaje))
                                      <div class="alert alert-danger" role="alert">
                                      {{$mensaje}}
                                      </div>
                                  @endif
                            </div>
                             <form method="post" name="form-patient" id="form" onSubmit="return add_cita()" action="/api/citas" novalidate>
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Numero en la lista</label>
                                    <div class="col-sm-9"><input type="text" value="{{$puesto}}" class="form-control" disabled></div>
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                 @if (($cupos >= 1) AND (empty($mensaje)))
                                  <button type="button" onClick="form_submit()" class="btn btn-primary">Guardar Cita</button>
                                  @elseif ($cupos == 0)
                                  <button type="button" class="btn btn-primary" disabled>Guardar Cita</button>
                                  @endif
                                </form>    
                      </div>               
                    </div>
                  </div>
                </div>
                @endif
                <script>
                  $( function() {
                    $( "#fecha" ).datepicker({ minDate: new Date(), changeMonth: true,changeYear: true});
                  } );
                  </script>
                   <script type="text/javascript">
                    function form_submit() {
                      document.getElementById("form").submit();
                     }    
                    </script>
  </div>
@stop