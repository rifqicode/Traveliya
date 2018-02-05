<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
          $table->increments('id_train');
          $table->integer('id_station');
          $table->string('train');
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
        Schema::dropIfExists('trains');
    }
}
