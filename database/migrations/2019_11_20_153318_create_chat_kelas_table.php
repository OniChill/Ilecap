<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_kelas', function (Blueprint $table) {
            $table->increments('id_chat');
            $table->Integer('user_id')->length(10)->unsigned();
            $table->Integer('kelas_id')->length(10)->unsigned();
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
        Schema::dropIfExists('chat_kelas');
    }
}
