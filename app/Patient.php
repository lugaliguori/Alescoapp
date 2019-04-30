<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Surgery;
use App\Cita;
use App\Observation;



class Patient extends Model
{
    protected $fillable = [
    	'nombre',
        'cedula',
    	'fecha_nac',
    	'sexo',
    	'procedencia',
    	'telefono',
        'correo',
        'password',
        'faltas'
    ];

    public function citas(){

    	return $this->hasMany(Cita::class);
    }

    public function surgeries(){

    	return $this->hasMany(Surgery::class);
    }

    public function observations(){

        return $this->hasMany(Observation::class);
    }

}
