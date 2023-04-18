<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{

//migracion 1-1
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45);
            $table->string('website', 45);
            $table->text('biografia');
            $table->unsignedBigInteger('user_id')->unique();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
//            el onpudte permite mantener los id  de las tablas
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}

























