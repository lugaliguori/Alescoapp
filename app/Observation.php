<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = [
    	'id_paciente',
    	'fecha_observaciones',
    	'observacion',
    	'seguimiento'

    ];

    public function pacientes(){

    	return $this->hasOne(Patient::class);
    }

}
