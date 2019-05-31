<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
    	'nombre', 'invitados', 'descripcion', 'precio',
    ];

    public function codigo()
    {
    	return $this->hasOne('App\Codigo');
    }
}
