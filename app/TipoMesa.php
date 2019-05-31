<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMesa extends Model
{
    protected $fillable = [
    	'tipo', 'capacidad',
    ];

    public function mesa()
    {
        return $this->hasOne('App\mesa');
    }
}
