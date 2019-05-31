<?php

use Illuminate\Database\Seeder;
use App\Codigo;

class CodigoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Codigo::create([
        	'codigo' => 'EQpHWIJOfZ',
        	'plan_id' => '1',
        ]);
    }
}
