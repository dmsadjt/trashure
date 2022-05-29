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
            $table->unsignedBigInteger('id_pengguna')->nullable();
            //foreign key id mitra
            $table->unsignedBigInteger('id_mitra')->nullable();
            //foreign key id bank sampah
            $table->unsignedBigInteger('id_banks')->nullable();
            $table->string('jenis_sampah');
            $table->integer('volume');
            $table->date('waktu_pemesanan');
            $table->date('status_pesanan');
            $table->integer('opsi_pembayaran');
            $table->string('alamat_pengguna');

            $table->foreign('id_pengguna')->references('id')->on('users');
            $table->foreign('id_mitra')->references('id')->on('users');
            $table->foreign('id_banks')->references('id')->on('users');

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
