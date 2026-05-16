<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('passing_score')->default(60)->comment('Minimum passing score percentage');
            $table->integer('max_attempts')->default(3);
            $table->integer('duration_minutes')->default(60);
            $table->integer('total_questions')->default(0);
            $table->enum('question_order', ['sequential', 'random'])->default('sequential');
            $table->enum('status', ['draft', 'active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
