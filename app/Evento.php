<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
    	'cofestejado', 'lugar', 'direccion', 'fecha', 'hora', 'vestimenta', 'tipo_evento_id', 'codigo_id', 'cod_evento','user_id',
    ];

    protected $dates = [
        'fecha',
    ];

    public function tipoEvento()
    {
    	return $this->belongsTo('App\tipoEvento');
    }

    public function codigo()
    {
    	return $this->belongsTo('App\Codigo');
    }

    public function invitados()
    {
    	return $this->hasMany('App\Invitado');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
