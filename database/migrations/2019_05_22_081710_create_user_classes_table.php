<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('course_id')->unsigned()->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('teacher_id')->unsigned()->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('day_id')->unsigned()->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('shift')->unsigned()->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('teacher_id')->references('id')->on('users');
            $table->foreign('shift')->references('id')->on('shifts');
            $table->foreign('day_id')->references('id')->on('days');
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
        Schema::dropIfExists('user_classes');
    }
}
