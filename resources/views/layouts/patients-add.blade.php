@extends('layouts.loginmain')

@section('content')
  <div class="row">
                <div class="col-lg-8" style="margin: auto">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Registrar datos de paciente</small></h5>
  
                        </div>
                        <div class="ibox-content">
                            <form method="post" name="form-patient" onSubmit="return add_patients()" action="/api/patients" novalidate>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                    <div class="col-sm-10"><input type="text" name="nombre" class="form-control" required></div>
                                 <div class="invalid-feedback">
                                  Por favor inserte Nombre
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                     <div class="col-sm-10"><input type="text" name="fecha_nac" id="fecha_nac"class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label placeholder="example@gmail.com" class="col-sm-2 col-form-label">Correo Electronico</label>

                                    <div class="col-sm-10"><input type="text" name="correo" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Password</label>

                                    <div class="col-sm-10"><input type="password" class="form-control" name="password" id="password"required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Sexo</label>

                                    <div class="col-sm-10"><label>
                                        <input type="radio" name="sexo" id="sexo" value="F" required> M </label> <label>
                                        <input type="radio" name="sexo" id="sexo" value="M"> F </label></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Estado de procedencia</label>

                                    <div class="col-sm-10"><input type="text" name="procedencia" id="procedencia" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Telefono</label>

                                    <div class="col-sm-10"><input type="text" name="telefono" id="telefono" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/">Cancel</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Registrar</button>
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