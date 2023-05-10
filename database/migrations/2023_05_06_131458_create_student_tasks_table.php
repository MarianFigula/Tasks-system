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
            $table->increments('id');
            $table->integer('file_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')
                ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('file_id')
                ->references('id')->on('files')->onDelete('cascade');
            $table->integer('task_num')->default(null)->nullable(true);
            $table->boolean('task_gen')->default(false);
            $table->boolean('task_sub')->default(false);
            $table->boolean('task_correct')->default(false);
            $table->string('student_answer')->default(null)->nullable(true);
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


