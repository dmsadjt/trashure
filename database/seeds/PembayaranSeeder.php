<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembayaran')->insert([
            'jenis_pembayaran'=>'Tunai',
            'pembayaran_slug'=>'tunai',
        ]);

        DB::table('pembayaran')->insert([
            'jenis_pembayaran'=>'Transfer',
            'pembayaran_slug'=>'transfer',
        ]);

        DB::table('pembayaran')->insert([
            'jenis_pembayaran'=>'E-wallet',
            'pembayaran_slug'=>'ewallet',
        ]);
    }
}
