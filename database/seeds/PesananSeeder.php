<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesanans')->insert([
            'id_pengguna'=>'2',
            'id_mitra'=>'3',
            'id_banks'=>'4',
            'jenis_sampah'=>'Anorganik',
            'volume'=> 40,
            'waktu_pemesanan'=>date('2022-05-05'),
            'status_pesanan'=>'Dalam pencarian driver',
            'opsi_pembayaran' => '1',
            'alamat_pengguna' => 'Surabaya',


        ]);
    }
}
