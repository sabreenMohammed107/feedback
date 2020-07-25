<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name',250)->nullable();
            $table->string('mobile_num',250)->nullable();
            $table->string('education',250)->nullable();
            $table->string('job',250)->nullable();
            $table->string('student_course',250)->nullable();
            $table->string('course_trainer',250)->nullable();
            $table->integer('benift_berc')->nullable();
            $table->longText('note',1000)->nullable();
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
        Schema::dropIfExists('students_feedbacks');
    }
}
