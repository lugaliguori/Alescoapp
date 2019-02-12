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
    public function index($id)
    {
        $date = date("Y-m-d");   

        $infos =  DB::select('SELECT d.id as id_doc, c.fecha as fecha, p.nombre as nombre_paciente, p.id as id, d.nombre as nombre,c.motivo as motivo 
                            FROM doctors d, patients p, citas c 
                            WHERE ((d.id = c.id_doctor) AND (p.id = ? ) AND (c.fecha >= ?))
                            ORDER BY c.fecha ASC ',[$id,$date]);
        if (empty($infos)){
          return view('layouts.users.nocita',['date'=>$date,'id' => $id]);
        } else {
            return view('layouts.users.citas',['infos' => $infos, 'id' => $id, 'date' => $date]);
        } 
        
    }

        public function indexAdmin($id)
    {
        $date = date("Y-m-d");   

        $infos =  DB::select('SELECT d.id as id_doc, c.fecha as fecha, p.nombre as nombre_paciente, p.id as id, d.nombre as nombre,c.motivo as motivo 
                            FROM doctors d, patients p, citas c 
                            WHERE ((d.id = ?) AND (p.id = c.id_paciente ) AND (c.fecha >= ?))
                            ORDER BY c.fecha ASC ',[$id,$date]);
        if (empty($infos)){
          return view('layouts.admin.nocita',['date'=>$date,'id' => $id,'opcion' => $opcion]);
        } else {
            return view('layouts.admin.citas',['infos' => $infos, 'id' => $id, 'date' => $date]);
        } 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request['admin'] !=  true){

            $data['id_paciente'] = $request['id_paciente'];
            $data['id_doctor'] = $request['id_doctor'];
            $data['motivo'] = $request['motivo'];

            $info = $request->all();

            $date = $info['fecha'];

            $data['fecha'] = date("Y-m-d", strtotime($date));

            $cita = Cita::create($info);

            return redirect()->action('CitaController@index',['id' => $request->id_paciente]);

        }else {

            $data['id_paciente'] = $request['id_paciente'];
            $data['id_doctor'] = $request['id_doctor'];
            $data['motivo'] = $request['motivo'];

            $info = $request->all();

            $date = $info['fecha'];

            $data['fecha'] = date("Y-m-d", strtotime($date));

            $cita = Cita::create($data);

            return redirect()->action('CitaController@indexAdmin',['id' => $request->id_doctor]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($date,$id,$id_doc)
    {

        DB::Delete('DELETE FROM citas where ((fecha = ?) AND (id_paciente = ?) AND (id_doctor = ?))',[$date,$id,$id_doc]);

        return redirect()->route('index',['id' => $id]);

    }

        public function Adestroy($date,$id,$id_doc)
    {

        $result = DB::Delete('DELETE FROM citas where ((fecha = ?) AND (id_paciente = ?) AND (id_doctor = ?))',[$date,$id,$id_doc]);

        return redirect()->route('admin',['id' => $id_doc]);

    }

    public function datoCita($id){

        $patient = DB::table('patients')->select('id','nombre')->where('id',$id)->get();
        $doctors = DB::table('doctors')->select('id','nombre')->get();

        return view('layouts.users.citas-add', ['patient' => $patient, 'doctors' => $doctors, 'id' => $id]);
    }

        public function adatoCita($id){

        $patients = DB::table('patients')->select('id','nombre')->get();
        $doctor = DB::table('doctors')->select('id','nombre')->where('id',$id)->get();

        return view('layouts.admin.citas-add', ['patients' => $patients, 'doctor' => $doctor, 'id' => $id]);
    }


    public function citaByDia(Request $request){

        $patient = DB::table('patients')->select('id')->where('id',$request->id)->get();
        $date = date("Y-m-d", strtotime($request->fecha));

        $infos =  DB::select('SELECT c.fecha as fecha, p.nombre as nombre_paciente, p.id as id, d.nombre as nombre,c.motivo as motivo 
                            FROM doctors d, patients p, citas c 
                            WHERE ((p.id = ? ) AND (c.fecha >= ?))',[$request->id,$date]);
        if (empty($infos)){
          return view('layouts.users.nocita',['date'=>$date,'id' => $request->id]);
        } else {
            return view('layouts.users.citas',['infos' => $infos, 'id' => $request->id, 'date' => $date]);
        } 


    }        

}
