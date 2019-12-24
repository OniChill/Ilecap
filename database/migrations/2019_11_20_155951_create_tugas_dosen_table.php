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
            $table->increments('id');
            $table->Integer('dosen_id')->length(10)->unsigned();
            $table->foreign('dosen_id')
            ->references('id')
            ->on('dosen')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('materi');
            //
            $table->Integer('kelas_id')->length(10)->unsigned();
            $table->foreign('kelas_id')
            ->references('id')
            ->on('kelas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nama_tugas');
            $table->string('deskripsi');
            $table->text('file');
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
