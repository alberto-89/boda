<?php

use Illuminate\Database\Seeder;
use App\Plan;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
        	'nombre' => 'Básico',
        	'invitados' => 50,
        	'descripcion' => 'Anexa hasta 50 invitados y optimiza ese evento intimo',
        	'precio' => 250,
        ]);
    }
}
