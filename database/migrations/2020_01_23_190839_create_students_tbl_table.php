<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_name');
            $table->string('roll_number');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('department');
            $table->string('academic_year');
            $table->string('image');
            $table->string('email');
            $table->string('student_password');
            $table->string('phone');
            $table->string('address');
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
        Schema::dropIfExists('students_tbl');
    }
}
