<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DoctorController;
use App\Cita;
use DB;
use Illuminate\Http\Request;

class CitaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = date("Y-m-d");   

        $infos =  DB::select('SELECT c.fecha as fecha, p.nombre as nombre_paciente, p.id as id, d.nombre as nombre 
                            FROM doctors d, patients p, citas c 
                            WHERE ((p.id = c.id_paciente ) AND (d.id = c.id_doctor)) AND (c.fecha = ?)',[$date]);


       if (empty($infos)){
            return view('layouts.nocita',['date' => $date]);
       } 

       return view('layouts.citas',['infos' => $infos]);
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

        $cita = Cita::create($info);

        return redirect()->action('CitaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
      $cita->delete();

       return response()->json(['El recurso ha sido eliminado'], 200);  
    }

    public function datoCita($id){

        $patient = DB::table('patients')->select('id','nombre')->where('id',$id)->get();
        $doctors = DB::table('doctors')->select('id','nombre')->get();

        return view('layouts.citas-add', ['patient' => $patient, 'doctors' => $doctors]);
    }

    public function citaByDia(Request $request){


        $infos =  DB::select('SELECT c.fecha as fecha, p.nombre as nombre_paciente, p.id as id, d.nombre as nombre 
                            FROM doctors d, patients p, citas c 
                            WHERE ((p.id = c.id_paciente ) AND (d.id = c.id_doctor)) AND (c.fecha = ?)',[$request->dia]);   



        if (empty($infos)){
            $date = $request->date;
        return view('layouts.nocita',['date' => $date]);
       } 

       return view('layouts.citas',['infos' => $infos]);

    }        

}
