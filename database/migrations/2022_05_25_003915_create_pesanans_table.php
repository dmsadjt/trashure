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
            $table->unsignedBigInteger('id_pengguna')->nullable();//foreign id pengguna
            $table->unsignedBigInteger('id_mitra')->nullable();//foreign id mitra
            $table->unsignedBigInteger('id_banks')->nullable();//foreign id bank
            $table->string('jenis_sampah');
            $table->integer('volume');
            $table->date('waktu_pemesanan')->useCurrent();
            $table->string('status_pesanan')->default('Dalam pencarian driver');
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
