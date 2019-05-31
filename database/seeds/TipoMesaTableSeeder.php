<?php

use Illuminate\Database\Seeder;
use App\TipoMesa;

class TipoMesaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoMesa::create([
        	'tipo' => 'Cuadrada',
        	'capacidad' => 12,
        ]);

        TipoMesa::create([
        	'tipo' => 'Redonda',
        ]);
    }
}
