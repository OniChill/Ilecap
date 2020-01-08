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
        Schema::create('chat_kelasukm', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('anggota_id')->length(10)->unsigned();
            $table->foreign('anggota_id')
            ->references('id')
            ->on('data_angota_ukm')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //
            $table->Integer('ukm_id')->length(10)->unsigned();
            $table->foreign('ukm_id')
            ->references('id')
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
        Schema::dropIfExists('chat_kelasukm');
    }
}
