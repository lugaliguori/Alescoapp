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

                                    <div class="col-sm-9">
                                      <div class="input-group">
                                        <select class="form-control" name="id_paciente" id="id_paciente" required></div>
                                          @foreach ($patients as $patient)
                                          <linea>
                                            <option value="{{$patient->id}}">{{$patient->nombre}}</option>
                                          </linea>
                                          @endforeach
                                          </select>
                                          <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" onClick="toggleSearchPatient()"><i class="fa fa-search"></i></button>
                                          </div>     
                                      </div> 
                                      <input type="text" class="form-control" id="search_patient" style = "margin-top: 5px; display: none" >     
                                 </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Fecha de la cita</label>
                                     <div class="col-sm-9"><input type="text" name="fecha" id="fecha" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                @if ($administrador == 1)
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Nombre</label>
                                    <div class="col-sm-9">
                                      <div class="input-group">
                                        <select class="form-control" name="id_doctor" id="id_doctor" required>
                                          @foreach ($doctors as $doc)
                                          <linea>
                                            <option value="{{$doc->id}}">{{$doc->nombre}} {{$doc->apellido}}, {{$doc->especialidad}}</option>
                                          </linea>
                                          @endforeach
                                          </select>  
                                          <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" onClick="toggleSearchDoctor()"><i class="fa fa-search"></i></button>
                                          </div>  
                                      </div>
                                      <input type="text" class="form-control" id="search_doctor" style = "margin-top: 5px; display: none" >          
                                  </div>
                                 </div> 

                                @else
                                <div class="form-group  row"><label class="col-sm-3 col-form-label">Nombre del Doctor</label>

                                    <div class="col-sm-9"><input type="text" name="name" class="form-control" value="{{$doctor->nombre}} {{$doctor->apellido}}, {{$doctor->especialidad}}" disabled></div>
                                    <div class="col-sm-10"><input type="text" name="id_doctor" class="form-control" value="{{$doctor->id}}" hidden></div>
                                </div>
                                @endif 
                                <input name="admin" value="{{$administrador}}" hidden>
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
                                <input name="id_user" value="{{$id}}" hidden>
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
                    <script>
                      function toggleSearchPatient() {
                        var x = document.getElementById("search_patient");
                        if (x.style.display === "none") {
                          x.style.display = "block";
                        } else {
                          x.style.display = "none";
                        }
                      }
                    </script>
                    <script>
                      function toggleSearchDoctor() {
                        var x = document.getElementById("search_doctor");
                        if (x.style.display === "none") {
                          x.style.display = "block";
                        } else {
                          x.style.display = "none";
                        }
                      }
                    </script>
                    <script>   
                  jQuery.fn.filterByText = function(textbox, selectSingleMatch) {
                      return this.each(function() {
                          var select = this;
                          var options = [];
                          $(select).find('option').each(function() {
                              options.push({value: $(this).val(), text: $(this).text()});
                          });
                          $(select).data('options', options);
                          $(textbox).bind('change keyup', function() {
                              var options = $(select).empty().data('options');
                              var search = $(this).val().trim();
                              var regex = new RegExp(search,"gi");
                            
                              $.each(options, function(i) {
                                  var option = options[i];
                                  if(option.text.match(regex) !== null) {
                                      $(select).append(
                                         $('<option>').text(option.text).val(option.value)
                                      );
                                  }
                              });
                              if (selectSingleMatch === true && $(select).children().length === 1) {
                                  $(select).children().get(0).selected = true;
                              }
                          });            
                      });
                  };

                  $(function() {
                      $('#id_doctor').filterByText($('#search_doctor'), true);
                    });
                    $(function() {
                      $('#id_paciente').filterByText($('#search_patient'), true);
                    });    
              </script>  
  </div>
@stop