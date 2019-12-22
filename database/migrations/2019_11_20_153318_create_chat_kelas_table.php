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
            $table->Integer('mahasiswa_id')->length(10)->unsigned();
            $table->foreign('mahasiswa_id')
            ->references('id')
            ->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //
            $table->Integer('dosen_id')->length(10)->unsigned();
            $table->foreign('dosen_id')
            ->references('id')
            ->on('dosen')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();

            //
            $table->Integer('kelas_id')->length(10)->unsigned();
            $table->foreign('kelas_id')
            ->references('id')
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
