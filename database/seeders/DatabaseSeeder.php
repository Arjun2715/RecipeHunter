<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Diet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Breakfast',
        ]);
        Category::create([
            'name' => 'Lunch',
        ]);
        Category::create([
            'name' => 'Dinner',
        ]);
        Cuisine::create([
            'name' => 'Italian',
        ]);
        Cuisine::create([
            'name' => 'French',
        ]);
        Cuisine::create([
            'name' => 'Spanish',
        ]);

        Diet::create([
            'name' => 'Vegetarian',
        ]);
        Diet::create([
            'name' => 'Vegan',
        ]);
        Diet::create([
            'name' => 'Carnivore',
        ]);

    }
}
