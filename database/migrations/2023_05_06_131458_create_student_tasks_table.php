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
        Schema::create('student_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('task_num');
            $table->foreign('student_id')
                ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('file_id')
                ->references('id')->on('files')->onDelete('cascade');
            $table->boolean('task_gen')->default(false);
            $table->boolean('task_sub')->default(false);
            $table->boolean('task_correct')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_tasks');
    }
};
