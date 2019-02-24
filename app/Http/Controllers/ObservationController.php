<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Observation;
use DB;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$id_doc)
    {
        $admin = self::checkAdmin($id_doc);
        $id = (int)$id;
        $id_doc = (int)$id_doc;

        $infos = DB::table('observations')->where('id_paciente',$id)->get();
        $patient= DB::table('patients')->select('id','nombre')->where('id',$id)->get();
        return view('layouts.admin.observations',['infos' => $infos,'id' => $id_doc,'patient' => $patient, 'administrador' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->fecha;
        $info['fecha'] = date("Y-m-d", strtotime($date));
        $info['observaciones'] = $request->observaciones;
        $info['seguimiento'] = $request->seguimiento;
        $info['id_paciente'] = $request->id_paciente;

        $observation = Observation::create($info);

        return redirect()->action('ObservationController@index',[$request->id_paciente,$request->id_doc]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $observacion = new Observation;
        if ($request->has('fecha')){
            $observacion->fecha=$request->fecha;
        }
        if ($request->has('observaciones')){
            $observacion->observaciones =$request->observaciones;
        }
        if ($request->has('seguimiento')){
            $observacion->seguimiento=$request->seguimiento;
        }
        if ($request->has('id_paciente')){
            $observacion->id_paciente =$request->id_paciente;
        }

        DB::table('observations')
            ->where('id', $id)
            ->update(['fecha' => $observacion->fecha,'observaciones' => $observacion->observaciones, 'seguimiento' => $observacion->seguimiento,'id_paciente' => $observacion->id_paciente]);

        return redirect()->route('show-observation',[$request->id_paciente,$request->id_doc]);
    }

     public function checkAdmin($id){

        $admin = DB::table('doctors')->select('admin')->where('id',$id)->get();

        return $admin[0]->admin;
    }  
}
