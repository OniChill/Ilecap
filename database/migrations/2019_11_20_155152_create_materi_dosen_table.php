<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi_dosen', function (Blueprint $table) {
            $table->Integer('kelas')->length(10)->unsigned();
            $table->foreign('kelas')
            ->references('id_kelas')
            ->on('kelas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //
            $table->Integer('dosen')->length(10)->unsigned();
            $table->foreign('dosen')
            ->references('id_dosen')
            ->on('dosen')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('materi');
            
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
        Schema::dropIfExists('materi_dosen');
    }
}
