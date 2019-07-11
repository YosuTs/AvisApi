<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_location');
            $table->integer('id_category');
            $table->string('name');
            $table->string('lastname');
            $table->dateTime('pick_up_date');
            $table->dateTime('drop_off_date');
            $table->string('total_cost');
            $table->boolean('paid');
            $table->dateTime('paid_date');
            $table->string('discount');
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
        Schema::dropIfExists('reservations');
    }
}
