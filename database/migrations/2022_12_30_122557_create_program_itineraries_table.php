<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_itineraries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('program_id')->unsigned();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->bigInteger('itinerary_id')->unsigned();
            $table->foreign('itinerary_id')->references('id')->on('itineraries')->onDelete('cascade');
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
        Schema::dropIfExists('program_itineraries');
    }
};
