<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->integer('mark_id')->unsigned();
            $table->timestamps();

            $table->foreign('mark_id')
                  ->references('id')
                  ->on('marks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mark_types');
    }
}
