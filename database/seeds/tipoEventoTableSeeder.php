<?php

use Illuminate\Database\Seeder;
use App\tipoEvento;

class tipoEventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipoEvento::create([
        	'tipo' => 'Boda',
        	'descripcion' => 'Ese momento especial, que marcará tu vida para siempre',
        ]);

        tipoEvento::create([
            'tipo' => 'XV Años',
            'descripcion' => 'Ese momento especial, que marcará tu vida para siempre',
        ]);
    }
}
