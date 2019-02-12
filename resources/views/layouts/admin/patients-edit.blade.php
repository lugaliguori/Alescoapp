@extends('layouts.admin-main')

@section('content')


  <div class="row">
                <div class="col-lg-8" style="margin: auto">
                   @if (isset($message))
                      <div class="alert alert-primary" role="alert">
                      {{$message}}
                  </div>
                  @endif
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Datos del paciente</small></h5>
  
                        </div>
                        <div class="ibox-content">
                            <form method="post" name="form-patient" onSubmit="return add_patients()" action="/api/patients/{{$id}}" novalidate>
                                @method('PUT')
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                    <div class="col-sm-10"><input type="text" name="nombre" value="{{$info[0]->nombre}}" class="form-control" required></div>
                                 <div class="invalid-feedback">
                                  Por favor inserte Nombre
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                     <div class="col-sm-10"><input type="text" name="fecha_nac" value={{$info[0]->fecha_nac}} id="fecha_nac"class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label placeholder="example@gmail.com" class="col-sm-2 col-form-label">Correo Electronico</label>

                                    <div class="col-sm-10"><input type="text" name="correo" class="form-control" value="{{$info[0]->correo}}" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Password</label>

                                    <div class="col-sm-10"><input type="password" class="form-control" name="password" id="password"required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Sexo</label>

                                    <div class="col-sm-10"><label>
                                        <input type="radio" name="sexo"  value="F" required> M </label> <label>
                                        <input type="radio" name="sexo" value="M"> F </label></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Estado de procedencia</label>

                                    <div class="col-sm-10"><input type="text" name="procedencia" value="{{$info[0]->procedencia}}" id="procedencia" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Telefono</label>

                                    <div class="col-sm-10"><input type="text" name="telefono" value="{{$info[0]->telefono}}" id="telefono" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Faltas a citas</label>

                                    <div class="col-sm-10"><input type="number" name="faltas" value="{{$info[0]->faltas}}" id="faltas" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/admin">Cancel</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Actualizar Datos</button>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/observations/{{$info[0]->id}}/{{$id}}">Ver Observaciones</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                  $( function() {
                    $( "#fecha_nac" ).datepicker({ maxDate: new Date(), changeMonth: true,changeYear: true});
                  } );
                  </script>

@stop