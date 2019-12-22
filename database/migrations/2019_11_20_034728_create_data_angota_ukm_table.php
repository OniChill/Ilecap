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
            $table->increments('id');
            $table->Integer('mahasiswa_id')->length(10)->unsigned();
            $table->foreign('mahasiswa_id')
            ->references('id')
            ->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //
            $table->Integer('ukm_id')->length(10)->unsigned();
            $table->foreign('ukm_id')
            ->references('id')
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
