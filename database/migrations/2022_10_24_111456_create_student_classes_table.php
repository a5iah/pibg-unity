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
        Schema::create('student_classes', function (Blueprint $table) {
            $table->foreignId('student_id')
                ->constrained('students')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('classroom_id')
                ->constrained('classrooms')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->date('start');
            $table->date('end');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['student_id', 'classroom_id', 'start', 'end']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_classes');
    }
};
