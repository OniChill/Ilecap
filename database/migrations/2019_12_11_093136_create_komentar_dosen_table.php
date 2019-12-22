<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('dosen_feed_id')->length(10)->unsigned();
            $table->foreign('dosen_feed_id')
            ->references('id')
            ->on('dosen_feed')
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
        Schema::dropIfExists('komentar_dosen');
    }
}
