<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTugasMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tugas_mahasiswa', function (Blueprint $table) {
            $table->increments('id_tugas');
            $table->Integer('mahasiswa')->length(10)->unsigned();
            $table->foreign('mahasiswa')
            ->references('id_mahasiswa')
            ->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //
            $table->Integer('kelas')->length(10)->unsigned();
            $table->foreign('kelas')
            ->references('id_kelas')
            ->on('kelas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('berkas');

            $table->date('tanggal_kirim');
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
        Schema::dropIfExists('data_tugas_mahasiswa');
    }
}
