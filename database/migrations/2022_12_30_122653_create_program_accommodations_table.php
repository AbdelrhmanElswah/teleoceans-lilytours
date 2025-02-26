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
        Schema::create('program_accommodations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('program_id')->unsigned();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->bigInteger('accommodation_id')->unsigned();
            $table->foreign('accommodation_id')->references('id')->on('accommodations')->onDelete('cascade');
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
        Schema::dropIfExists('program_accommodations');
    }
};
