<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('alamat')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('no_telepon')->nullable();
            $table->integer('poin')->nullable();
            $table->string('kendaraan')->nullable();
            $table->string('plat_kendaraan')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('status_bank')->nullable();


            $table->timestamps();
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profils');
    }
}
