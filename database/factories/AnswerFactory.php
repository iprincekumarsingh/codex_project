<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "answer" => $this->faker->sentence,
            "answer_by" => $this->faker->numberBetween(1, 50),
            "ticket_id" => $this->faker->numberBetween(1, 50),
            
            //
        ];
    }
}
