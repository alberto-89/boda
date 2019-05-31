<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Evento;

class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
        	'cofestejado' => 'Alberto',
            'cod_evento' =>'115566',
        	'lugar' => 'Salón de los Electricistas',
        	'direccion' => 'Jose Moreno Irabien S/N COl. Primero de Mayo',
        	'fecha' => '2019-09-28',
        	'hora' => '08:00:00',
        	'vestimenta' => 'Formal',
        	'tipo_evento_id' => '1',
        	'codigo_id' => '1',
            'user_id'=>2,
        ]);
    }
}
