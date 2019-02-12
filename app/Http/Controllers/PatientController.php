<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $patients = DB::table('patients')->get();

        return view('layouts.admin.patients',['patients' => $patients,'id' => $id]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = $request->all();

        $date = $info['fecha_nac'];

        $info['fecha_nac'] = date("Y-m-d", strtotime($date));

        $patient = Patient::create($info);

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = DB::table('patients')->where('id',$id)->get();

        return View('layouts.patients-edit',['info'=> $info,'id' => $id]);
    }

        public function showAdmin($id,$id_doc)
    {
        $info = DB::table('patients')->where('id',$id)->get();

        return View('layouts.admin.patients-edit',['info'=> $info,'id' => $id_doc]);
    }

    public function getInfo($id)
    {
        $info = DB::table('patients')->where('id',$id)->get();

        return $info;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {


        $opcion =1;

        if ($request->has('nombre')){
            $patient->nombre=$request->nombre;
        } 

        if ($request->has('fecha_nac')){
            $patient->fecha_nac=$request->fecha_nac;
        } 

        if ($request->has('sexo')){
            $patient->sexo=$request->sexo;
        } 

        if ($request->has('procedencia')){
            $patient->procedencia=$request->procedencia;
        }

        if ($request->has('telefono')){
            $patient->telefono=$request->telefono;
        }

        if ($request->has('correo')){
            $patient->correo=$request->correo;
        }

        if (!$patient->isDirty()){
            $info = self::getInfo($patient->id);
            $message = "Debes hacer al menos un cambio en los datos";
            return View('layouts.patients-edit',['info'=> $info,'id'=> $patient->id,'message' => $message]);

        }
        $patient->save();

        $info = self::getInfo($patient->id);

        $message = "Datos actualizados";

         return View('layouts.patients-edit',['info'=> $info,'id'=> $patient->id,'message' => $message]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_doc)
    {
        DB::table('patients')->where('id',$id)->delete();

        //return response()->json(['mesage' => 'se ha borrado al paciente', 'data' => $patient], 200);

        return redirect()->action('PatientController@index',['id' => $id_doc]);
    }
}
