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
        Schema::create('quizs_in_bank', function (Blueprint $table) {
            $table->id("id_quiz");
            $table->string('questions')->nullable();
            $table->string('ans1')->nullable();
            $table->string('ans2')->nullable();
            $table->string('ans3')->nullable();
            $table->string('ans4')->nullable();
            $table->string('ans_true')->nullable();
            $table->string('difficult')->nullable();
            $table->unsignedBigInteger('id_bank');
            $table->foreign('id_bank')->references('id_bank')->on('quiz_banks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizs_in_bank');
    }
};
