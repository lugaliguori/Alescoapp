<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\Patient;
use App\Day;

class Cita extends Model
{
    protected $fillable = [
    	'fecha',
    	'id_paciente',
    	'id_doctor',
        'motivo',
    ];


    public function patients(){

    	return $this->belongsToOne(Patient::class);
    }

    public function doctors(){

    	return $this->belongsToOne(Doctor::class);
    }
}
