<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InformasiSampah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_sampahs', function (Blueprint $table) {
            $table->bigIncrements('info_id');
            $table->string('judul');
            $table->string('informasi');
            $table->string('gambar')->nullable();
            $table->datetime('tanggal_pembuatan')->useCurrent();
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
        Schema::dropIfExists('informasi_sampahs');
    }
}
