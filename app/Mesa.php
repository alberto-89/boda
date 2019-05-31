<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = [
    	'nombre', 'tipoMesa_id',
    ];

    public function acompanantes()
    {
    	return $this->hasMany('App\Acompanante');
    }

    public function invitados()
    {
        return $this->hasMany('App\invitado');
    }

    public function tipoMesa()
    {
        return $this->belongsTo('App\TipoMesa');
    }
}
