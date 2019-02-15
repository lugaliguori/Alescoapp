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
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Correo</label>
                                     <div class="col-sm-10"><input type="email" name="correo" id="correo" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Password</label>

                                    <div class="col-sm-10"><input type="password" class="form-control" name="password" id="password"required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Especialidad</label>
                                    <div class="col-sm-10"><select class="form-control" name="id_especialidad" id="id_especialidad" required></div>
                                        @foreach ($especialidades as $especialidad)
                                        <linea>
                                          <option value="{{$especialidad->id}}">{{$especialidad->nombre}}</option>
                                        </linea>
                                        @endforeach
                                        </select>  
                                 </div>
                                 <input type="text" id="admin" name="admin" value="1" hidden>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/admin/index/{{$id}}">Cancelar</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Agregar Doctor</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
@stop