<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return Doctor::all();;
    }

    public function indexUI(){

        $doctors = DB::table('doctors')->select('id','nombre','especialidad')->get();

        return view('layouts.doctors',['doctors' => $doctors]);
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

        $doctor = Doctor::create($info);

        //return response()->json($doctor,201);

        return redirect()->route('doctors-edit',['id' => $doctor->id]);
    }

    public function storeUI(Request $request){

        $info = $request->all();

        $doctor = Doctor::create($info);

        return redirect()->route('doctor-edit',['id' => $doctor->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return $doctor;
    }

    public function showUI($id){

        $info = DB::table('doctors')->where('id',$id)->get();

        return View('layouts.doctors-edit',['info'=> $info]);

    }

    public function getInfo($id)
    {
        $info = DB::table('doctors')->where('id',$id)->get();

        return $info;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        if ($request->has('nombre')){
            $doctor->nombre=$request->nombre;
        } 

        if ($request->has('especialidad')){
            $doctor->especialidad=$request->especialidad;
        }

        if ($request->has('num_pacientes')){
            $doctor->num_pacientes=$request->num_pacientes;
        }

        if (!$doctor->isDirty()){
            return response()->json(['Se debe especificar al menos un valor distinto'],422);
        }

        $doctor->save();

        $info = self::getInfo($doctor->id);

        return View('layouts.doctors-edit',['info'=> $info]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('doctors')->where('id',$id)->delete();


        return redirect()->action('DoctorController@indexUI');
    }
}
