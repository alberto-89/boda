<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmacion extends Model
{
    protected $fillable = [
    	'invitado_id', 'acompanante_id', 'asistencia_id', 'asistio','evento_id',
    ];

    public function invitado()
    {
        return $this->belongsTo('App\Invitado');
    }

    public function acompanante()
    {
        return $this->belongsTo('App\Acompanante');
    }

    public function asistencia()
    {
        return $this->belongsTo('App\Asistencia');
    }
}
 