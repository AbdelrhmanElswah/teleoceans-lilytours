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
        Schema::create('tailor_mades', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->string('nationality')->nullable();
            $table->boolean('dates_are_flexible')->nullable();
            $table->string('duration')->nullable();
            $table->string('adult')->nullable();
            $table->string('infants')->nullable();
            $table->string('child')->nullable();
            $table->string('holiday_type')->nullable();
            $table->string('transportation')->nullable();
            $table->string('style')->nullable();
            $table->string('promo')->nullable();
            $table->text('comment')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tailor_mades');
    }
};
