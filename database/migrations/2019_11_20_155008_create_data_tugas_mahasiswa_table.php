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
            $table->Integer('mahasiswa_id')->length(10)->unsigned();
            $table->foreign('mahasiswa_id')
            ->references('id')
            ->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //
            $table->Integer('kelas_id')->length(10)->unsigned();
            $table->foreign('kelas_id')
            ->references('id')
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
