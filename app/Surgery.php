<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Surgery extends Model
{
    protected $fillable = [
    	'fecha',
    	'descripcion',
    ];

    public function patients(){

    	return $this->belongsTo(Patient::class);
    }
}
