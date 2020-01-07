<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_feed', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('users_id')->length(10)->unsigned();
            // $table->foreign('users_id');
            // // ->references('id')
            // // ->on('mahasiswa')
            // // ->onUpdate('cascade')
            // // ->onDelete('cascade');
            $table->text('feed');
            $table->text('gambar');
            $table->integer('like');

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
        Schema::dropIfExists('tb_feed');
    }
}
