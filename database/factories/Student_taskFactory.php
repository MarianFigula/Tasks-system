<?php

namespace Database\Factories;

use App\Models\Student_task;
use App\Models\User;
use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student_task>
 */
class Student_taskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= Student_task::class;

    public function definition(): array
    {
        return [
            'student_id' => User::factory(),
            'file_id' => File::factory(),
            'task_num' => $this->faker->randomDigit(),
            'task_gen' => $this->faker->boolean,
            'task_sub' =>  $this->faker->boolean,
            'task_correct' =>  $this->faker->boolean,
        ];
    }
}
