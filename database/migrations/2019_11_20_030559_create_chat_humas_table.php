<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatHumasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_humas', function (Blueprint $table) {
            $table->increments('id_chat');
            $table->unsignedInteger('user')->length(10)->unsigned();
            $table->foreign('user')
            ->references('id_humas')
            ->on('humas')
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
        Schema::dropIfExists('chat_humas');
    }
}
