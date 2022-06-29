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
        Schema::create('exam', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exam_name');


            $table->integer('lecturer_id')->unsigned();
            $table->integer('student_id')->nullable();
            $table->integer('question_number')->unsigned();
            $table->integer('total_degree')->unsigned();

            $table->integer('student_degree')->nullable();
            $table->timestamp('start_date')->nullable();
            
            $table->timestamp('end_date')->nullable();
          
            $table->string('image');
            $table->string('room_code');

            $table->timestamps();
            $table->foreign('room_code')->references('code')->on('room')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam');
    }
};
