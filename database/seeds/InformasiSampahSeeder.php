<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformasiSampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informasi_sampahs')->insert([
            'judul' => 'Warga Serangan Bali Ramai-ramai Tukar Sampah dengan Sembako',
            'informasi' => 'Sejumlah warga Serangan, Denpasar, terlihat sangat antusias saat ketika menukarkan sampah plastiknya dengan sembako di rumah perajin di Serangan, Denpasar, Bali pada Jumat (27/5/2022) pagi.',
            'tanggal_pembuatan' => date('2022-5-28'),
        ]);
    }
}
