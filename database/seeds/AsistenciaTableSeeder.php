<?php

use Illuminate\Database\Seeder;
use App\Asistencia;

class AsistenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asistencia::create([
        	'tipo' => 'Asistiré',
        	'descripcion' => 'El invitado Asistirá',
        ]);

        Asistencia::create([
        	'tipo' => 'Pendiente',
        	'descripcion' => 'El invitado aun esta por decidir',
        ]);

        Asistencia::create([
        	'tipo' => 'No Asistiré',
        	'descripcion' => 'El invitado no asistira',
        ]);
    }
}
