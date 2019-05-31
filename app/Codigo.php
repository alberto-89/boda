<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codigo extends Model
{
    protected $fillable = [
    	'codigo', 'plan_id',
    ];

    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }

    public function evento()
    {
    	return $this->hasOne('App\Evento');
    }
}
