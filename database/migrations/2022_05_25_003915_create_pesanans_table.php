<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            //foreign key id pengguna
            $table->string('id_pengguna') ;
            //foreign key id mitra
            $table->string('id_mitra');
            //foreign key id bank sampah
            $table->string('id_banks');
            $table->string('jenis_sampah');
            $table->integer('volume');
            $table->date('waktu_pemesanan');
            $table->date('status_pesanan');
            $table->integer('opsi_pembayaran');
            //foreign key
            $table->string('alamat_pengguna');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
