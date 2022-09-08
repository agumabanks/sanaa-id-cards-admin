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
        Schema::create('id-Info', function (Blueprint $table) {
            $table->id();
            $table->string('names');
            $table->string('regNo')->unique();
            $table->string('email')->unique();
            $table->string('dob');
            $table->string('course');
            $table->string('nationality');
            $table->string('tel');
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
        Schema::dropIfExists('id-Info');
    }
};
