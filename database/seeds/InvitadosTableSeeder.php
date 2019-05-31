<?php

use Illuminate\Database\Seeder;

class InvitadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Invitado::class, 50)->create();
    }
}
