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
        Schema::create('studentresults', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->integer('student_id');
            $table->integer('lecturer_id');
            $table->integer('exam_id');
            $table->double('total_degree');
            $table->double('exam_degree');
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
        Schema::dropIfExists('studentresults');
    }
};
