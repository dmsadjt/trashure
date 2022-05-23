<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_nama' => 'Admin',
            'role_slug' => 'admin',
        ]);

        DB::table('roles')->insert([
            'role_nama' => 'Pengguna',
            'role_slug' => 'pengguna',
        ]);

        DB::table('roles')->insert([
            'role_nama' => 'Mitra',
            'role_slug' => 'mitra',
        ]);

        DB::table('roles')->insert([
            'role_nama' => 'Banks',
            'role_slug' => 'banks',
        ]);
    }
}
