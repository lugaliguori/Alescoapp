<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;

class Especialidad extends Model
{
    protected $fillable = [
    	'nombre'
    ];

    public function doctor(){

    	return $this->hasOne(Doctor::class);
    }
}
