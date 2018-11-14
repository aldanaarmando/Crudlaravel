<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_teacher');
            $table->unsignedInteger('id_administrator');
            $table->date('date');
            
            $table->index(['id','id_teacher','id_administrator']);
            $table->foreign('id_teacher')->references('CI')->on('people');
            $table->foreign('id_administrator')->references('CI')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
