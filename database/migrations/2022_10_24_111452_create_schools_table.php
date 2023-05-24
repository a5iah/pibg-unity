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
        Schema::create('schools', function (Blueprint $table) {
            $table->char('id', 8)->primary();
            $table->string('name', 255);
            $table->string('phone', 32);
            $table->string('fax', 32)->nullable();
            $table->string('email', 255);
            $table->string('address1', 255);
            $table->string('address2', 255)->nullable();
            $table->string('address3', 255)->nullable();
            $table->string('city', 255);
            $table->string('postcode', 16);
            $table->string('state_iso_code', 6);
            $table->string('country_alpha3', 3);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
};
