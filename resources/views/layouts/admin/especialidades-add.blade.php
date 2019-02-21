@extends('layouts.admin-main')

@section('content')
  <div class="row">
                <div class="col-lg-8" style="margin: auto">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Agrega una nueva especialidad</small></h5>
                        </div>
                        <div class="ibox-content">
                            <form method="post" name="form-patient" onSubmit="return add_especialidad()" action="/api/especialidades/{{$id}}" novalidate>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                    <div class="col-sm-10"><input class="form-control" name="nombre" id="nombre" required></div>

                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="/especialidades/{{$id}}">Cancelar</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Agregar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
@stop