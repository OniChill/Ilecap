<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_kelas', function (Blueprint $table) {
            $table->increments('id_chat');
            $table->Integer('mahasiswa')->length(10)->unsigned();
            $table->foreign('mahasiswa')
            ->references('id_mahasiswa')
            ->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //
            $table->Integer('dosen')->length(10)->unsigned();
            $table->foreign('dosen')
            ->references('id_dosen')
            ->on('dosen')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();

            //
            $table->Integer('kelas')->length(10)->unsigned();
            $table->foreign('kelas')
            ->references('id_kelas')
            ->on('kelas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('chat');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_kelas');
    }
}
