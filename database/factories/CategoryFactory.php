<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'label' => $this->faker->name(6, true),
            'alias' => $this->faker->unique()->numberBetween(1,20),
            'description' => $this->faker->paragraphs(3, true)
        ];
    }
}
