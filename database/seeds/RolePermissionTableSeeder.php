<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id' 		=> 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 18,
            'role_id' 		=> 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 19,
            'role_id' 		=> 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 23,
            'role_id' 		=> 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 24,
            'role_id'       => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 28,
            'role_id'       => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 20,
            'role_id'       => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 26,
            'role_id'       => 2,
        ]);
    }
}
