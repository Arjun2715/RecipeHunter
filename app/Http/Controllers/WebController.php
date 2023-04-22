<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecentlyUpdatedResource;
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
            'recentlyUpdatedData' => $recentlyUpdatedRecipes,
            'recommended' => $recommendedRecipes,
            'mostViewed' => $mostViewed
        ]);
    }

    public function categories(){
        
    }
}
