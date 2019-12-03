<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatUkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_ukm', function (Blueprint $table) {
            $table->increments('id_chat');
            $table->Integer('anggota')->length(10)->unsigned();
            $table->foreign('anggota')
            ->references('id_anggota')
            ->on('data_angota_ukm')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //
            $table->Integer('ukm')->length(10)->unsigned();
            $table->foreign('ukm')
            ->references('id_ukm')
            ->on('ukm')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('chat');

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
        Schema::dropIfExists('chat_ukm');
    }
}
