<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaintingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paintings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('description')->nullable();
            $table->string('authorName')->nullable();
            $table->string('size')->nullable();
            $table->string('subject')->nullable();
            $table->string('medium')->nullable();
            $table->string('materials')->nullable();
            $table->integer('yearMade')->nullable();
            $table->boolean('onSale')->nullable();
            $table->float('price')->nullable();
            $table->string('filename')->nullable();
            $table->string('mime')->nullable();
            $table->string('original_filename')->nullable();
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
        Schema::dropIfExists('paintings');
    }
}
