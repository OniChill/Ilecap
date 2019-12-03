<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humas', function (Blueprint $table) {
            $table->integer('mahasiswa')->length(10)->unsigned();
            $table->foreign('mahasiswa')
            ->references('id_mahasiswa')
            ->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table ->increments('id_humas')->unique();
            $table ->string('password');
            $table ->string('status');

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
        Schema::dropIfExists('humas');
    }
}
