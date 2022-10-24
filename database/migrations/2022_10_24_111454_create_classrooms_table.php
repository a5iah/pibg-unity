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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->char('school_code', 8);
            $table->char('class_level', 3);
            $table->string('name', 255);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('school_code')
                ->references('id')
                ->on('schools')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->foreign('class_level')
                ->references('id')
                ->on('class_levels')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->index(['school_code', 'class_level']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
};
