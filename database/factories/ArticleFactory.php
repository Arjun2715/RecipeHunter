<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6),
            'excerpt' => $this->faker->paragraph(4),
            'body' => $this->faker->paragraph(15),
        ];
    }
}
