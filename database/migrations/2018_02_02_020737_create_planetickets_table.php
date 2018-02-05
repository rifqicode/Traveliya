<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaneticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planetickets', function (Blueprint $table) {
          $table->increments('id_planeticket');
          $table->integer('id_users');
          $table->integer('id_airport');
          $table->string('type_trip');
          $table->string('ticket_code');
          $table->integer('adult')->default('0');
          $table->integer('child')->default('0');
          $table->integer('status');
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
        Schema::dropIfExists('planetickets');
    }
}
