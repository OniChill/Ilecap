<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUkmFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukm_feed', function (Blueprint $table) {
            $table->Integer('anggota_ukm')->length(10)->unsigned();
            $table->foreign('anggota_ukm')
            ->references('id_anggota')
            ->on('data_angota_ukm')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('feed');
            $table->date('tanggal_upload');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ukm_feed');
    }
}
