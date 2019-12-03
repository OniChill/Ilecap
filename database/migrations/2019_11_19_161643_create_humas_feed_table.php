<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumasFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humas_feed', function (Blueprint $table) {
            $table->unsignedInteger('user')->length(10)->unsigned();
            $table->foreign('user')
            ->references('id_humas')
            ->on('humas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('feed');
            $table ->text('komentar');
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
        Schema::dropIfExists('humas_feed');
    }
}
