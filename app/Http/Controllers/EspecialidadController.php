<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;
use DB;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $especialidades = Especialidad::all(); 

        return View('layouts.admin.especialidades',['id' => $id,'especialidades' => $especialidades]);
    }

    public function loadView($id){

        return View('layouts.admin.especialidades-add',['id'=> $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $info = $request->all();

        $especialidad = Especialidad::create($info);

        return redirect()->route('especialidades',['id' => $id]);
    }

    public function show($id_especialidad,$id){

        $especialidad = DB::table('especialidades')->select('nombre','id')->where('id',$id_especialidad)->get();

        return view('layouts.admin.especialidades-edit',['id' => $id , 'especialidad' => $especialidad]);
    }

    public function update(Request $request, $id,$id_especialidad){

        $especialidad = DB::table('especialidades')->where('id',$id_especialidad)->update(['nombre' => $request->nombre]);

        return redirect()->route('especialidad-edit',['id_especialidad' => $id_especialidad, 'id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_especialidad,$id)
    {
        DB::table('especialidades')->where('id',$id_especialidad)->delete();

        return redirect()->route('especialidades',['id' => $id]);
    }
}
