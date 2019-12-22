<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarHumasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_humas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('humas_feed_id')->length(10)->unsigned();
            $table->foreign('humas_feed_id')
            ->references('id')
            ->on('humas_feed')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->Text('komentar');
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
        Schema::dropIfExists('komentar_humas');
    }
}
