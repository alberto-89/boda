<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AsistenciaTableSeeder::class);
        $this->call(PlanTableSeeder::class);
        $this->call(tipoEventoTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RolePermissionTableSeeder::class);
        //$this->call(CodigoTableSeeder::class);
        //$this->call(EventosTableSeeder::class);
        //$this->call(InvitadosTableSeeder::class);
    }
}
