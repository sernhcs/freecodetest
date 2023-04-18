<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{

    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->text('body');

            $table->unsignedBigInteger('courses_id')->nullable();

            $table->foreign('courses_id')
                ->references('id')->on('courses')
                ->onDelete('set null');


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
