<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_matters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_subject');
            $table->date('startdate');
            $table->unsignedInteger('id_teacher');
            $table->unsignedInteger('id_student');
            
            $table->index(['id','id_subject','id_teacher','id_student']);
            $table->foreign('id_student')->references('CI')->on('people');
            $table->foreign('id_subject')->references('id')->on('materias');
            $table->foreign('id_teacher')->references('CI')->on('people');
            
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
        Schema::dropIfExists('student_matters');
    }
}
