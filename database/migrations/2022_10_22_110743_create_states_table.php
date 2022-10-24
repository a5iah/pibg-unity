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
        Schema::create('states', function (Blueprint $table) {
            $table->char('iso_code', 6)->primary();
            $table->char('country_alpha3', 3);
            $table->string('subdivision',32);
            $table->string('name',255);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('country_alpha3')
                ->references('alpha3')
                ->on('countries')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
};
