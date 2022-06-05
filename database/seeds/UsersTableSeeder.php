<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('pass@admin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Ruben',
            'email' => 'pengguna@gmail.com',
            'password' => Hash::make('pass@pengguna'),
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Ega Dragaon',
            'email' => 'mitra@gmail.com',
            'password' => Hash::make('pass@mitra'),
        ]);

        DB::table('users')->insert([
            'role_id' => '4',
            'name' => 'Bank Sampah Vrindavan',
            'email' => 'banks@gmail.com',
            'password' => Hash::make('pass@banks'),
        ]);
    }
}
