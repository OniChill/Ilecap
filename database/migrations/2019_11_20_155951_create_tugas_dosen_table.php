<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_dosen', function (Blueprint $table) {
            $table->increments('id_tugas');
            $table->Integer('dosen')->length(10)->unsigned();
            $table->foreign('dosen')
            ->references('id_dosen')
            ->on('dosen')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('materi');
            //
            $table->Integer('kelas')->length(10)->unsigned();
            $table->foreign('kelas')
            ->references('id_kelas')
            ->on('kelas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nama_tugas');
            $table->string('deskripsi');
            $table->text('file');
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
        Schema::dropIfExists('tugas_dosen');
    }
}
