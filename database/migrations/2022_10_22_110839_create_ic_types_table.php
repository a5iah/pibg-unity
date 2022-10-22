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
        Schema::create('ic_types', function (Blueprint $table) {
            $table->char('id', 4);
            $table->string('name', 64);
            $table->char('country_alpha3', 3);
            $table->timestamps();

            $table->primary('id');
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
        Schema::dropIfExists('ic_types');
    }
};
