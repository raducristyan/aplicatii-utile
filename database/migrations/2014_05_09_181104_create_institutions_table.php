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
            $table->string('cif')->index();
            $table->string('name')->index();
            $table->string('email')->nullable()->index();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('iban')->nullable();
            $table->string('bank')->nullable();
            $table->boolean('active')->default(false);
            $table->softDeletes();
            $table->timestamps();
            $table->unique('cif');
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
