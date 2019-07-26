<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street')->index()->nullable();
            $table->string('number')->nullable();
            $table->string('bl')->nullable();
            $table->string('sc')->nullable();
            $table->string('ap')->nullable();
            $table->string('postal_code')->nullable();
            $table->integer('village_id')->unsigned();
            $table->morphs('addressable');
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['addressable_id', 'addressable_type']);
            $table->foreign('village_id')->references('id')->on('villages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
