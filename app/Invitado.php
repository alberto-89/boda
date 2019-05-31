<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    protected $fillable = [
    	'name', 'appat', 'apmat', 'telefono', 'email', 'codigo', 'titulo', 'evento_id', 'user_id', 'mesa_id',
    ];

    public function acompanantes()
    {
    	return $this->hasMany('App\Acompanante');
    }

    public function confirmacion()
    {
    	return $this->hasOne('App\Confirmacion');
    }

    public function evento()
    {
        return $this->belongsTo('App\Evento');
    }

    public function user()
    {
        return $this->belongsTo('App\user');
    }

    public function mesa()
    {
        return $this->belongsTo('App\mesa');
    }
}
