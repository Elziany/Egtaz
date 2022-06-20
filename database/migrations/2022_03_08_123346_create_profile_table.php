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
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lecturer_id')->unsigned()->nullable();
            $table->integer('student_id')->unsigned()->nullable();
            $table->string('image');
            $table->string('country');
            $table->string('phone')->nullable();
            $table->timestamps();
            $table->foreign('lecturer_id')->references('id')->on('lecturer')
            ->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('student')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturer_profile');
    }
};
