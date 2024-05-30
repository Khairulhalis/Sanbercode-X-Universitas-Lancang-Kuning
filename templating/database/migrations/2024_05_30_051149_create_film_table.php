<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('judul',45);
            $table->text('ringkasan');
            $table->integer('tahun');
            $table->string('poster', 45);
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
}
