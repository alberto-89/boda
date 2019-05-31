<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'tipo',	'descripcion',
    ];

    public function confimacion()
    {
    	return $this->hasOne('App\Confimacion');
    }
}
