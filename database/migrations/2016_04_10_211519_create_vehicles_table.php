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
            $table->integer('displacement')->unsigned();
            $table->string('engine_series')->nullable();
            $table->string('chassis_series')->nullable();
            $table->string('power')->nullable();
            $table->string('color');
            $table->string('card_series')->nullable();
            $table->string('card_number')->nullable();
            $table->string('registration_number')->unsigned();
            $table->integer('mark_id');
            $table->date('fabrication_date');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('mark_id')->references('id')->on('marks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
