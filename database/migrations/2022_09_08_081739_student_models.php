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
        //student_models
        Schema::create('student_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('email');
            $table->string('fee_clarence');
            $table->string('regNo');
            $table->string('dob');
            $table->string('course');
            $table->string('tel');
            $table->string('nationality');
            $table->string('studentId');
            $table->string('photo_path', 2048)->nullable();
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
        //
    }
};
