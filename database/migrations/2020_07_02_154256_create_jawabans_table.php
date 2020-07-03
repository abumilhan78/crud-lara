<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabans', function (Blueprint $table) {
            $table->id();
            $table->string('isi');
            $table->boolean('jawaban_benar')->nullable();
            $table->integer('like');
            $table->integer('dislike');
            $table->integer('vote');
            $table->foreignId('id_pertanyaan');
            $table->foreign('id_pertanyaan')->references('id')->on('pertanyaans');
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
        Schema::dropIfExists('jawabans');
    }
}
