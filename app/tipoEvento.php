<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoEvento extends Model
{
    protected $fillable = [
    	'tipo', 'descripcion',
    ];

    public function evento()
    {
    	return $this->hasOne('App\Evento');
    }
}
