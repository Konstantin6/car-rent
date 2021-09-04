<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_characteristics', function (Blueprint $table) {
        
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->string('car_model');
            $table->integer('car_year');
            $table->string('car_registration');
            $table->string('car_type');
            $table->string('car_fuel');
            $table->integer('car_doors');
            $table->integer('car_seats');
            $table->string('car_gearbox');
            $table->string('car_color');
            $table->text('car_description');
            $table->integer('price_id');
            $table->unsignedBigInteger('price_by_hour');
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_characteristics');
    }
}
