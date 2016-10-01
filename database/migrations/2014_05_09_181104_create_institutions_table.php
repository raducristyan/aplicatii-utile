<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('institutions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('cif');
          $table->string('name');
          $table->string('email')->nullable();
          $table->string('phone')->nullable();
          $table->string('fax')->nullable();
          $table->string('iban')->nullable();
          $table->string('bank')->nullable();
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
        Schema::drop('institutions');
    }
}
