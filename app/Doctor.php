<?php

namespace App;
use App\Cita;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
    	'nombre',
    	'especialidad',
    	'correo',
    	'password',
    	'id_especialidad',
        'admin'
    ];

    public function citas(){

    	return $this->hasMany(Cita::class);
    }

    public function especialidad(){

    	return $this->hasMany(Especialidad::class);
    }
}
