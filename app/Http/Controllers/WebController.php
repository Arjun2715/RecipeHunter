<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecentlyUpdatedResource;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WebController extends Controller
{


    public function home(){
        $recipeController = new RecipeController();
        $recentlyUpdatedRecipes = RecentlyUpdatedResource::collection($recipeController->recentlyUpdatedRecipes());
        $recommendedRecipes = RecentlyUpdatedResource::collection($recipeController->recommendations());
        $mostViewed = $recipeController->mostViewed();
        //  dd($recentlyUpdatedRecipes);
        return Inertia::render('Home', [
            'data' => [
                'recentlyUpdated' => $recentlyUpdatedRecipes,
                'recommended' => $recommendedRecipes,
                'mostViewed' => $mostViewed
            ]
        ]);
    }

    public function categories(){
        $Categories = Category::all();
        // dd($Categories);
        return Inertia::render('Categories', [
            'data' => [
                'categories' => $Categories,
            ]
        ]);
    }    

    public function searchRandom(){
        $Recipes = Recipe::inRandomOrder()->limit(15)->get();
        // dd($Recipes);
        return Inertia::render('FilterSearch', [
            'data' => [
                'recipes' => $Recipes,
            ]

        ]);

        
    }    
}
