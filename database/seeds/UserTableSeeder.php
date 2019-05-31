<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Alberto -  Admin
        User::create([
        	'name' => 'Alberto',
        	'appat' => 'Bautista',
        	'apmat' => 'Geronimo',
        	'telefono' => 9931326179,
        	'email' => 'abautista@boda.com',
        	'password' => bcrypt('soleil89'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);

        // // Alicia - Cliente
        // User::create([
        //     'name' => 'Alicia',
        //     'appat' => 'Ramon',
        //     'apmat' => 'Rios',
        //     'telefono' => 9933116100,
        //     'email' => 'alicia@boda.com',
        //     'password' => bcrypt('soleil89'),
        // ]);

        // DB::table('role_user')->insert([
        //     'role_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
