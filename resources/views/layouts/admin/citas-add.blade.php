@extends('layouts.admin-main')

@section('content')
  <div class="row">
                <div class="col-lg-8" style="margin: auto">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Programa tu cita</small></h5>
  
                        </div>
                        <div class="ibox-content">
                            <form method="post" name="form-patient" onSubmit="return add_cita()" action="/api/citas" novalidate>
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

                                <div class="col-sm-9"><input type="text" name="name" class="form-control" value="{{$doctor[0]->nombre}}" disabled></div>
                                <div class="col-sm-9"><input type="text" name="id_doctor" class="form-control" value="{{$doctor[0]->id}}" hidden></div>



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
                                        <button class="btn btn-primary btn-sm" type="submit">Crear cita</button>
                                    </div>
                                </div>
                            </form>
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