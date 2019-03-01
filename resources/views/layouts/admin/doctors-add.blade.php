@extends('layouts.admin-main')

@section('content')
  <div class="row">
                <div class="col-lg-8" style="margin: auto">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Agrega un nuevo doctor</small></h5>
  
                        </div>
                        <div class="ibox-content">
                            <form method="post" name="form-patient" onSubmit="return add_doctors()" action="/api/doctors/{{$id}}" novalidate>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                    <div class="col-sm-10"><input class="form-control" name="nombre" id="nombre" required></div>

                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Apellido</label>

                                    <div class="col-sm-10"><input class="form-control" name="apellido" id="apellido" required></div>

                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Correo</label>
                                     <div class="col-sm-10"><input type="email" name="correo" id="correo" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Password</label>

                                    <div class="col-sm-10"><input type="password" class="form-control" name="password" id="password"required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Especialidad</label>
                                    <div class="col-sm-10"><select class="form-control" name="id_especialidad" id="id_especialidad" required>
                                        @foreach ($especialidades as $especialidad)
                                        <linea>
                                          <option value="{{$especialidad->id}}">{{$especialidad->nombre}}</option>
                                        </linea>
                                        @endforeach
                                        </select>  
                                    </div>    
                                 </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Hora de inicio de citas</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="horario" id="horario" required></div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Pacientes por día</label>
                                        <div class="col-sm-10"><input type="number" class="form-control" name="pacientes_dia" id="pacientes_dia" required></div>
                                </div>
                                @if ($administrador == 1)
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Administrador</label>
                                    <div class="col-sm-10"><label>
                                        <input type="radio" name="admin" id="admin" value="1"> Si </label>
                                </div>
                                @endif
                                </div> 
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/doctores/{{$id}}">Cancelar</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Agregar Doctor</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
           <script>
            $(document).ready(function(){
                 $('#horario').timepicker({minTime: '7',maxTime: '6:00pm',interval: 30, timeFormat: 'hh:mm:ss'});
            });
           </script>
@stop