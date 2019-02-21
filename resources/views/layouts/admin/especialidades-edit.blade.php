@extends('layouts.admin-main')

@section('content')
  <div class="row">
                <div class="col-lg-8" style="margin: auto">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Modificar una especialidad</small></h5>
                        </div>
                        <div class="ibox-content">
                            <form method="post" name="form-patient" action="/api/especialidades/{{$id}}/{{$especialidad[0]->id}}" novalidate>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                    <div class="col-sm-10"><input class="form-control" name="nombre" id="nombre" value="{{$especialidad[0]->nombre}}" required></div>

                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/especialidades/{{$id}}">Cancelar</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Actualizar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
@stop