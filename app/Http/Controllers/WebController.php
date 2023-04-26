<?php

namespace App\Http\Controllers;

use App\Http\Resources\RandomRecipesResource;
use App\Http\Resources\RecentlyUpdatedResource;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use App\Models\Cuisine;
use App\Models\RecipeIngredient;
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



    public function searchRecipes(Request $request){
        $request['sort'] = $request['sort'][0];
        $request['maxReadyTime'] = $request['hour']*60 + $request['minute'];
        return $recipes = RecipeController::search($request);
        return Inertia::render('FilterSearch', [
            'data' => [
                'recipes' => $recipes,
            ]
        ]);
    }
    public function searchRand(Request $request){
        $randrecipes = Recipe::inRandomOrder()->limit(15)->get();
        $recipes = RandomRecipesResource::collection($randrecipes);
        return Inertia::render('FilterSearch', [
            'data' => [
                'recipes' => $recipes,
            ]
        ]);
    }    
    

}
