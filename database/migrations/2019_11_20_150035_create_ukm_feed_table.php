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
            $table->increments('id');
            $table->Integer('anggota_id')->length(10)->unsigned();
            $table->foreign('anggota_id')
            ->references('id')
            ->on('data_angota_ukm')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('feed');
            $table->text('gambar');
            $table->date('tanggal_upload');
            $table->integer('like');
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
