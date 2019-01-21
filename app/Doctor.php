<?php

namespace App;
use App\Cita;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
    	'nombre',
    	'especialidad',
    	'num_pacientes',
    ];

    public function citas(){

    	return $this->hasMany(Cita::class);
    }


}
