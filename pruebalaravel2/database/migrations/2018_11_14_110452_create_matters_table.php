<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_student');
            $table->string('modelename',30);
            $table->unsignedInteger('id_teacher');
            $table->integer('classroom',2);      
            
            $table->index(['id','id_student','id_teacher']);
            $table->foreign('id_student')->references('CI')->on('people');
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
        Schema::dropIfExists('matters');
    }
}
