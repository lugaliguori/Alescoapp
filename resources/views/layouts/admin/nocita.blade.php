@extends('layouts.admin-main')

@section('content')

<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Tus Citas </h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row justify-content-end">
                                <div class="col-sm-3">
                                	<form method="POST" action="/api/cita">
                                        <input placeholder="ir a fecha" type="text" name="id" id="id" value="{{$id}}"" class="form-control form-control-sm" hidden>
                                    <div class="input-group"><input placeholder="ir a fecha" type="text" name="fecha" id="fecha" class="form-control form-control-sm">
                                     <span class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-primary">Ir
                                    </button> </span></div>

                                </div>
                            </div>
                            <div class="table-responsive" style="margin-top: 5px">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>No ha realizado ninguna cita hasta la fecha</td>
                                    </tr>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
          <script>
          $( function() {
            $( "#fecha" ).datepicker({ minDate: new Date()});
          } );
          </script>

@stop

