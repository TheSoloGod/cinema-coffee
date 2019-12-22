<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('movie_category_id');
            $table->text('content');
            $table->string('image');
            $table->integer('time');
            $table->year('year');
            $table->string('national');
            $table->string('imdb');
            $table->string('trailer')->nullable();
            $table->timestamps();
            $table->foreign('movie_category_id')->references('id')->on('movie_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
