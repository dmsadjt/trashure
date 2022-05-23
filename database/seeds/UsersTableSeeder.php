<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'kata_sandi' => bcrypt('pass@admin'),
            'alamat' => 'surabaya',
            'no_rekening' => '12345678',
            'no_telepon' => '08139082357',
            'poin' => '50'
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'nama' => 'Pengguna',
            'email' => 'pengguna@gmail.com',
            'kata_sandi' => bcrypt('pass@pengguna'),
            'alamat' => 'Jakarta',
            'no_rekening' => '12345678',
            'no_telepon' => '08139082357',
            'poin' => '50'
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'nama' => 'Mitra',
            'email' => 'mitra@gmail.com',
            'kata_sandi' => bcrypt('pass@mitra'),
            'alamat' => 'surabaya',
            'no_rekening' => '12345678',
            'no_telepon' => '08139082357',
            'poin' => '50'
        ]);

        DB::table('users')->insert([
            'role_id' => '4',
            'nama' => 'Bank Sampah',
            'email' => 'banks@gmail.com',
            'kata_sandi' => bcrypt('pass@banks'),
            'alamat' => 'surabaya',
            'no_rekening' => '12345678',
            'no_telepon' => '08139082357',
            'poin' => '50'
        ]);
    }
}
