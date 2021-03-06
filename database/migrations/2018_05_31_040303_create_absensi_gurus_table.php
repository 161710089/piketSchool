<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->UnsignedInteger('id_guru');
            $table->foreign('id_guru')->references('id')->on('gurus')->Ondelete('casade');
            $table->date('tanggal');
            $table->string('keterangan');
            $table->string('nama_petugas');
           
            // $table->UnsignedInteger('id_PetugasPiket');
            // $table->foreign('id_PetugasPiket')->references('id')->on('Petugas_pikets')->Ondelete('casade');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE');
     
           
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
        Schema::dropIfExists('absensi_gurus');
    }
}
