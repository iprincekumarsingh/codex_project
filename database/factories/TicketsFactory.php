<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence(),
            'status' => $this->faker->numberBetween(0, 1),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'user_id' => $this->faker->numberBetween(1, 50),


            //
        ];
    }
}