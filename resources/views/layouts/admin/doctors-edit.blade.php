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
                            <h5>Editar datos del doctor</small></h5>
  
                        </div>
                        <div class="ibox-content">
                            <form method="post" name="form-patient" action="/api/doctors/{{$info[0]->id}}" novalidate>
                              @METHOD('PUT')
                              @csrf
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                    <div class="col-sm-10"><input class="form-control" value="{{$info[0]->nombre}}" name="nombre" id="nombre" required></div>
                                    <input class="text" id="id" name="id" value="{{$id}}" hidden>

                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Cédula</label>

                                    <div class="col-sm-10"><input type="text" name="cedula" id="cedula" class="form-control" value="{{$info[0]->cedula}}" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Apellido</label>

                                    <div class="col-sm-10"><input class="form-control" name="apellido" id="apellido" value="{{$info[0]->apellido}}" required></div>

                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Correo</label>
                                     <div class="col-sm-10"><input type="email" value="{{$info[0]->correo}}" name="correo" id="correo" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Password</label>

                                    <div class="col-sm-10"><input type="password" value="{{$info[0]->password}}" class="form-control" name="password" id="password"required></div>
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
                                        <div class="col-sm-10"><input type="text" class="form-control" value="{{$info[0]->horario}}" name="horario" id="horario" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                @if ($administrador == 1)
                                 <div class="form-group row"><label class="col-sm-2 col-form-label">Administrador</label>
                                    <div class="col-sm-10"><label>
                                        <input type="radio" name="admin" id="admin" value="1"> Si </label>
                                    </div>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                @endif
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/doctores/{{$id}}">Cancelar</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Actualizar Datos</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
           <script>
           $(document).ready(function(){
                 $('#horario').timepicker({});
            });
           </script>
@stop