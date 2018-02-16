<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_passengers', function (Blueprint $table) {
            $table->increments('id_passenger');
            $table->integer('id_trainticket');
            $table->integer('id_planeticket');
            $table->string('name_passenger');
            $table->string('email_passenger');
            $table->string('no_ktp');
            $table->string('born_date');
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
        Schema::dropIfExists('detail_passengers');
    }
}
