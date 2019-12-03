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
            $table->Integer('dosen')->length(10)->unsigned();
            $table->foreign('dosen')
            ->references('id_dosen')
            ->on('dosen')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('feed');
            $table->string('komentar');

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
