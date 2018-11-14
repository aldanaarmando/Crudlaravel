<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_student');
            $table->unsignedInteger('id_teacher');
            $table->unsignedInteger('id_matter');
            $table->char('turn'10);
            $table->time('hour');
            
            $table->index(['id','student','id_teacher','id_subject']);
            $table->foreign('id_student')->references('CI_')->on('people');
            $table->foreign('id_teacher')->references('CI')->on('people');
            $table->foreign('id_subject')->references('id')->on('matters');
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
        Schema::dropIfExists('schedules');
    }
}
