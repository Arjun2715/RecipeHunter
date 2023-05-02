<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\RecipeController;

class UpdateRecipeImages extends Command
{
    protected $signature = 'recipe:update-images';
    protected $description = 'Update images of all recipes using Google Custom Search API';

    public function handle()
    {
        $controller = new RecipeController;
        $controller->updateImages();
        $this->info('Recipe images have been updated.');
    }
}
