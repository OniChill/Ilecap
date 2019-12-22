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
            $table->integer('mahasiswa_id')->length(10)->unsigned();
            $table->foreign('mahasiswa_id')
            ->references('id')
            ->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table ->increments('id')->unique();
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
