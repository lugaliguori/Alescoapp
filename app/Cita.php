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
    ];

    public function fechas(){

    	return $this->belongsToMany(Day::class);
    }

    public function patients(){

    	return $this->belongsToMany(Patient::class);
    }

    public function doctors(){

    	return $this->belongsToMany(Doctor::class);
    }
}
