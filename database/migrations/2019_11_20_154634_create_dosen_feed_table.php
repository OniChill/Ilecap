<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_feed', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('dosen_id')->length(10)->unsigned();
            $table->foreign('dosen_id')
            ->references('id')
            ->on('dosen')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('dosen_feed');
    }
}
