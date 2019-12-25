<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('tb_feed_id')->length(10)->unsigned();
            $table->Integer('users_id')->length(10)->unsigned();
            $table->foreign('users_id')
            ->references('id')
            ->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');


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
        Schema::dropIfExists('komentar');
    }
}
