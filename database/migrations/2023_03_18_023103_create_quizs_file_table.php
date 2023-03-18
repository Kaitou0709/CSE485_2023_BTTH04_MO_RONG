<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quizs_file', function (Blueprint $table) {
            $table->id('id_quizs_file');
            $table->string('questions')->nullable();
            $table->string('ans1')->nullable();
            $table->string('ans2')->nullable();
            $table->string('ans3')->nullable();
            $table->string('ans4')->nullable();
            $table->string('ans_true')->nullable();
            $table->unsignedBigInteger('id_exams_file');
            $table->foreign('id_exams_file')->references('id_exams_file')->on('exams_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizs_file');
    }
};
