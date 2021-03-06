<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('song_name');
            $table->string('audio');
            $table->string('image');
            $table->string('author');
            $table->string('views');
            $table->longText('desc')->nullable();
            $table->unsignedBigInteger('singer_id');
            $table->foreign('singer_id')->references('id')->on('singers');
            $table->unsignedBigInteger('album_id');
            $table->foreign('album_id')->references('id')->on('albums');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('songs');
    }
}
