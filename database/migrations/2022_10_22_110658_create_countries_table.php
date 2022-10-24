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
        Schema::create('countries', function (Blueprint $table) {
            $table->char('alpha3', 3)->primary();
            $table->char('alpha2', 2);
            $table->string('name', 255);
            $table->integer('phone_code',false,true);
            $table->string('currency_symbol', 8);
            $table->char('currency_code', 3);
            $table->timestamps();
            $table->softDeletes();

            $table->unique('alpha2', 'uidx_countries_alpha2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
