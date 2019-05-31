<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acompanante extends Model
{
    protected $fillable = [
        'name', 'appat', 'apmat', 'invitado_id', 'mesa_id', 'nino',
    ];

    public function invitado()
    {
        return $this->belongsTo('App\Invitado');
    }

    public function mesa()
    {
        return $this->belongsTo('App\Mesa');
    }

    public function confimacion()
    {
    	return $this->hasOne('App\Confimacion');
    }
}
