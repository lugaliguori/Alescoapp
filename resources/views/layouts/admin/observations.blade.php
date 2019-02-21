@extends('layouts.admin-main')

@section('content')
  <div class="row">
                <div class="col-lg-8" style="margin: auto">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Observaciones del paciente {{$patient[0]->nombre}}</small></h5>
                        </div>
                       @if (isset($infos))
                       @foreach ($infos as $info)
                        <div class="ibox-content">
                            <form method="POST" name="form-patient" action="/api/observations/{{$info->id}}" novalidate>
                              @method('PUT')
                              @csrf
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Fecha de la Observacion</label>
                                     <div class="col-sm-10"><input type="text" value="{{$info->fecha}}" name="fecha" id="fecha" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Observación</label>

                                <div class="col-sm-10"><textarea value="{{$info->observaciones}}" name="observaciones" class="form-control" >{{$info->observaciones}}</textarea></div>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group  row"><label class="col-sm-2 col-form-label">Seguimiento</label>
                                    <div class="col-sm-10"><select class="form-control" name="seguimiento" id="seguimiento" value="{{$info->seguimiento}}" required></div>
                                        <linea>
                                          <option @if ($info->seguimiento == '1 semanas') selected @endif value="1 semanas">1 semanas</option>
                                          <option @if ($info->seguimiento == '3 semanas') selected @endif value="3 semanas">3 semanas</option>
                                          <option @if ($info->seguimiento == '1 mes') selected @endif value="1 mes">1 mes</option>
                                          <option @if ($info->seguimiento == '3 meses') selected @endif value="3 meses">3 meses</option>
                                          <option @if ($info->seguimiento == '6 meses') selected @endif value="6 meses">6 meses</option>
                                        </linea>
                                        </select>  
                                 </div>
                                </div>
                                <input name="id_doc" value="{{$id}}" hidden>
                                <input name="id_paciente" value="{{$info->id_paciente}}" hidden>
                                <div class="form-group row" >
                                    <div class="col-sm-4 col-sm-offset-2" style="display: contents">
                                        <button class="btn btn-primary btn-sm" type="submit">Actualizar Observación</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endforeach
                        @endif
                         <div class="ibox-content">
                            <form method="post" name="form-patient" action="/api/observations" novalidate>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Fecha de la Observación</label>
                                     <div class="col-sm-10"><input type="text" name="fecha" id="fecha" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Observacion</label>

                                <div class="col-sm-10"><textarea type="text" name="observaciones" class="form-control" ></textarea></div>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group  row"><label class="col-sm-2 col-form-label">Seguimiento</label>

                                    <div class="col-sm-10"><select class="form-control" name="seguimiento" id="seguimiento" required></div>
                                        <linea>
                                          <option value="1 semanas">1 semanas</option>
                                          <option value="3 semanas">3 semanas</option>
                                          <option value="1 mes">1 mes</option>
                                          <option value="3 meses">3 meses</option>
                                          <option value="6 meses">6 meses</option>
                                        </linea>
                                        </select>
                                <input name="id_doc" value="{{$id}}" hidden>
                                <input name="id_paciente" value="{{$patient[0]->id}}" hidden>
  
                                 </div>
                                </div>
                                <div class="form-group row" >
                                    <div class="col-sm-4 col-sm-offset-2" style="display: contents">
                                        <a class="btn btn-white btn-sm" href="/patients/{{$id}}">Cancelar</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Agregar Observación</button>
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