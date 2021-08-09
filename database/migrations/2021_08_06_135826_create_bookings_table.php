<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('userID');
            $table->string('userName');
            $table->string('userEmail');
            $table->string('userContact');
            $table->string('tourID');
            $table->string('tourName');
            $table->string('tourDuration');
            $table->string('travelDate');
            $table->string('transportation');
            $table->string('food');
            $table->string('hotel');
            $table->string('price');
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
        Schema::dropIfExists('bookings');
    }
}
