<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory as factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(6, true),
            'category_id' =>  $this->faker->randomDigitNot(0),

            'description' => $this->faker->paragraphs(3, true),
        ];
    }
    
}
