<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAngotaUkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_angota_ukm', function (Blueprint $table) {
            $table->increments('id_anggota');
            $table->Integer('mahasiswa')->length(10)->unsigned();
            $table->foreign('mahasiswa')
            ->references('id_mahasiswa')
            ->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //
            $table->Integer('ukm')->length(10)->unsigned();
            $table->foreign('ukm')
            ->references('id_ukm')
            ->on('ukm')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->enum('Status',['belum tervalidasi','tervalidasi'])->default('belum tervalidasi');
            $table->enum('jabatan',['anggota','ketua','sekretaris','bendahara'])->default('anggota');
            
            
            

            
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
        Schema::dropIfExists('data_angota_ukm');
    }
}
