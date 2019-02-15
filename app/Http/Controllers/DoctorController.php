<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Doctor;
use App\Especialidad;
use DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {        
        $especialidades = DB::select('SELECT * FROM especialidades');
        return view('layouts.admin.doctors-add',['especialidades' => $especialidades, 'id' => $id]);;
    }

    public function indexUI($id_doc){

        $doctors = DB::select('SELECT d.id as id, d.nombre as nombre, d.correo as correo, e.nombre as especialidad 
                            FROM doctors d, especialidades e WHERE d.id_especialidad = e.id');     

        return view('layouts.admin.doctors',['doctors' => $doctors,'id' => $id_doc]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $info = $request->all();

        $password = $info['password'];

        $info['password'] = Hash::make($request->password);

        $doctor = Doctor::create($info);

        //return response()->json($doctor,201);

        return redirect()->route('doctors',['id' => $id]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showUI($id,$id_doc){

        $info = DB::table('doctors')->where('id',$id)->get();
        $especialidades = DB::select('SELECT * FROM especialidades');

        return View('layouts.admin.doctors-edit',['info'=> $info,'id' => $id_doc,'especialidades' => $especialidades]);

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

        $especialidades = DB::select('SELECT * FROM especialidades');

        if ($request->filled('nombre')){
            $doctor->nombre=$request->nombre;
        } 

        if ($request->filled('especialidad')){
            $doctor->especialidad=$request->especialidad;
        }

        if ($request->filled('correo')){
            $doctor->correo=$request->correo;
        }
        if ($request->filled('password')){
            $doctor->password=$request->password;
        }

        if (!$doctor->isDirty()){
            $info = self::getInfo($doctor->id);
            $message = "Debes hacer al menos un cambio en los datos";
            return view('layouts.admin.doctors-edit',['info'=> $info,'id'=> $request->id,'message' => $message,'especialidades' => $especialidades]);
        }

        $doctor->save();

        $info = self::getInfo($doctor->id);

        return view('layouts.admin.doctors-edit',['info'=> $info,'id'=> $request->id,'especialidades' =>$especialidades]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_doc)
    {
        DB::table('citas')->where('id_doctor',$id)->delete();
        DB::table('doctors')->where('id',$id)->delete();

        return redirect()->action('DoctorController@indexUI',['id' => $id_doc]);
    }
}
