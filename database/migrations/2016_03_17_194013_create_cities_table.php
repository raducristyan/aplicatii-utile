<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siruta');
            $table->decimal('longitude', 18, 16);
            $table->decimal('latitude', 18, 16);
            $table->string('name');
            $table->string('region');
            $table->integer('county_id')->unsigned();

            $table->foreign('county_id')
                  ->references('id')
                  ->on('counties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
    }
}
