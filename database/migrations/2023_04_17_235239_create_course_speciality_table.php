<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSpecialityTable extends Migration
{

    public function up()
    {
        Schema::create('course_speciality', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('speciality_id');

            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade');
            $table->foreign('speciality_id')
                ->references('id')->on('specialities')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_speciality');
    }
}
