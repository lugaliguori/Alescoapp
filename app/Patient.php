<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Surgery;
use App\Cita;


class Patient extends Model
{
    protected $fillable = [
    	'nombre',
    	'fecha_nac',
    	'sexo',
    	'diagnostico',
    	'procedencia',
    	'telefono',
    	'seguimiento',
    	'motivo',
    	'id_cirugia',
        'faltas'
    ];

    public function citas(){

    	return $this->hasMany(Cita::class);
    }

    public function surgeries(){

    	return $this->hasMany(Surgery::class);
    }

}
