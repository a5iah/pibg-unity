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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('forename', 255);
            $table->string('surname', 255);
            $table->foreignId('title_id')
                ->constrained('person_titles')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->string('ic_no', 32);
            $table->char('ic_type_id', 4);
            $table->string('phone', 32);
            $table->string('email', 255);
            $table->string('address1', 255);
            $table->string('address2', 255);
            $table->string('address3', 255);
            $table->string('city', 255);
            $table->string('state_iso_code', 6);
            $table->string('country_alpha3', 3);
            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->timestamps();

            $table->foreign('ic_type_id')
                ->references('id')
                ->on('ic_types')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->foreign('state_iso_code')
                ->references('iso_code')
                ->on('states')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
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
        Schema::dropIfExists('people');
    }
};
