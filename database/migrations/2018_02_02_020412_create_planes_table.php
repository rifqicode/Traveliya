<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
          $table->increments('id_plane');
          $table->integer('id_airport');
          $table->string('airplane');
          $table->string('class');
          $table->date('departure_date');
          $table->string('from');
          $table->string('destination');
          $table->time('hours');
          $table->integer('max');
          $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planes');
    }
}
