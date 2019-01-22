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
    public function index()
    {
        $patients = DB::table('patients')->select('id','nombre')->get();

        return view('layouts.patients',['patients' => $patients]);
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

        $patient = Patient::create($info);

        dd($patient);

        return redirect()->route('patients-edit',['id' => $patient->id]);
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

        return View('layouts.patients-edit',['info'=> $info]);
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
        if ($request->has('nombre')){
            $patient->nombre=$request->nombre;
        } 

        if ($request->has('fecha_nac')){
            $patient->fecha_nac=$request->fecha_nac;
        } 

        if ($request->has('sexo')){
            $patient->sexo=$request->sexo;
        } 

        if ($request->has('diagnostico')){
            $patient->diagnostico=$request->diagnostico;
        }         

        if ($request->has('diagnostico')){
            $patient->diagnostico=$request->diagnostico;
        }

        if ($request->has('diagnostico')){
            $patient->diagnostico=$request->diagnostico;
        }

        if ($request->has('procedencia')){
            $patient->procedencia=$request->procedencia;
        }

        if ($request->has('telefono')){
            $patient->telefono=$request->telefono;
        }

        if ($request->has('seguimiento')){
            $patient->seguimiento=$request->seguimiento;
        }

        if ($request->has('motivo')){
            $patient->motivo=$request->motivo;
        }

        if ($request->has('id_cirujia')){
            $patient->id_cirujia=$request->id_cirujia;
        }

        if (!$patient->isDirty()){
            return response()->json(['Se debe especificar al menos un valor distinto'],422);
        }

        $patient->save();

        $info = self::getInfo($patient->id);

         return View('layouts.patients-edit',['info'=> $info]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('patients')->where('id',$id)->delete();

        //return response()->json(['mesage' => 'se ha borrado al paciente', 'data' => $patient], 200);

        return redirect()->action('PatientController@index');
    }
}
