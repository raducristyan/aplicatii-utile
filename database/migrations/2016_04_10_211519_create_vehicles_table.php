<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->integer('displacement')->unsigned()->nullable();
            $table->string('engine_series')->nullable();
            $table->string('chassis_series')->nullable();
            $table->string('power')->nullable();
            $table->string('color');
            $table->string('card_series')->nullable();
            $table->string('card_number')->nullable();
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
        Schema::drop('vehicles');
    }
}
