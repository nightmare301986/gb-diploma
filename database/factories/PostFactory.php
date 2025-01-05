<?php

namespace Database\Factories;
///** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition()
    {
        // $faker = Faker\Factory::create();
        return [
            'author_id' => rand(1, 4),
            'title' => $this->faker->realText(20, 2),
            'excerpt' => $this->faker->realText(rand(100, 120)),
            'body' => $this->faker->realText(200, 2),
            'created_at' => $this->faker->dateTimeBetween('-60 days', '-30 days'),
            'updated_at' => $this->faker->dateTimeBetween('-20 days', '-1 days'),
        ];
    }
}
;

