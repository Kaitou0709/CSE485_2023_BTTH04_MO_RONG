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
        Schema::create('quizs_exam_bank', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_quiz')->nullable();
            $table->unsignedBigInteger('id_exams_bank')->nullable();
            $table->foreign('id_quiz')->references('id_quiz')->on('quizs_in_bank');
            $table->foreign('id_exams_bank')->references('id_exams_bank')->on('exams_bank');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizs_exam_bank');
    }
};
