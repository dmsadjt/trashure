<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //pengguna
    public function run()
    {
        DB::table('profils')->insert([
            'user_id' => '2',
            'alamat' => 'Surabaya',
            'no_rekening' => '666777888',
            'no_telepon' => '0888888881',
            'poin' => '5000'
        ]);
        //mitra
        DB::table('profils')->insert([
            'user_id' => '3',
            'alamat' => 'Sidoarjo',
            'no_rekening' => '111222333',
            'no_telepon' => '0888888882',
            'kendaraan' => 'Honda CBR 250 RR',
            'plat_kendaraan' => 'L 053 R',
        ]);
        //banksampah
        DB::table('profils')->insert([
            'user_id' => '4',
            'alamat' => 'Surabaya',
            'no_rekening' => '666777888',
            'no_telepon' => '0888888883',
            'nama_bank' => 'Bank Sampah Vrindavan',
            'status_bank' => 'Active',
        ]);
    }
}
