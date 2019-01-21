<?php

namespace App\Http\Controllers;

use App\Surgery;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{

    public function index()
    {
        return Surgery::all();
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

        $cirujia = Surgery::create($info);

        return response()->json($cirujia,201);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surgery $cirujia)
    {
        if ($request->has('fecha')){
            $cirujia->fecha=$request->fecha;
        }

        if ($request->has('descripcion')){
            $cirujia->descripcion=$request->descripcion;
        }  

        if (!$cirujia->isDirty()){
            return response()->json(['Se debe especificar al menos un valor distinto'],422);
        }

        $cirujia->save();

        return response()->json($cirujia,201);
    }
}
