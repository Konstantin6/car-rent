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
            $table->integer('car_id');
            $table->string('car_model');
            $table->integer('car_year');
            $table->string('car_color');
            $table->string('car_type');
            $table->text('car_description');
            $table->integer('price_id');
            $table->integer('price_by_hour');
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
        Schema::dropIfExists('car_characteristics');
    }
}
