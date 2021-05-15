<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('subdescription')->nullable();
            $table->text('category');
            $table->string('image_href');
            $table->string('is_premier')->default(false);
            $table->integer('views')->default(0);
            $table->float('wink')->default(8);
            $table->float('kinopoisk')->default(5);
            $table->float('imdb')->default(7);
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
        Schema::dropIfExists('films');
    }
}
