<?php

namespace Database\Factories;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= File::class;

    public function definition(): array
    {
        return [
            'path' => $this->faker->filePath(),
            'date' => now(),
            'points' =>  $this->faker->randomDigit(),
        ];
    }

}
