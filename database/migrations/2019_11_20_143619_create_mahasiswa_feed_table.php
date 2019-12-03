<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_feed', function (Blueprint $table) {
            $table->Integer('mahasiswa')->length(10)->unsigned();
            $table->foreign('mahasiswa')
            ->references('id_mahasiswa')
            ->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->date('tanggal_chat');
            $table->text('feed');
            $table->text('komentar');
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
        Schema::dropIfExists('mahasiswa_feed');
    }
}
