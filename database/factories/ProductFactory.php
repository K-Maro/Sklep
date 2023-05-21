<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'picture' => 'https://picsum.photos/' . $this->faker->numberBetween(200, 600) . '/' . $this->faker->numberBetween(200, 600),
            'title' => $this->faker->sentence,
            'price' => $this->faker->randomNumber(),
            'description' => $this->faker->text,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
