<?php

namespace App\Http\Controllers;

use App\Http\Resources\GetRecipeResource;
use App\Http\Resources\RandomRecipesResource;
use App\Http\Resources\RecentlyUpdatedResource;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use App\Models\Cuisine;
use App\Models\RecipeIngredient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;


class WebController extends Controller
{


    public function home(){

        $recipeController = new RecipeController();
        $recentlyUpdatedRecipes = RecentlyUpdatedResource::collection($recipeController->recentlyUpdatedRecipes());
        $recommendedRecipes = RecentlyUpdatedResource::collection($recipeController->recommendations());
        $mostViewed = $recipeController->mostViewed();
        return Inertia::render('Home', [
            'data' => [
                'recentlyUpdated' => $recentlyUpdatedRecipes,
                'recommended' => $recommendedRecipes,
                'mostViewed' => $mostViewed
            ]/* hola */
        ]);
    }

    public function categories(){
        $Categories = Category::all();
        foreach($Categories as $category){
            $category->image = url($category->image);
        }

        return Inertia::render('Categories', [
            'data' => [
                'categories' => $Categories,
            ]
        ]);
    }

    public function getRecipe(Request $request){
        $recipe_id = $request->recipeId;
        $recipe = Recipe::find($recipe_id);
        return Inertia::render('ViewRecipe', [
            'data' => [
                'recipe' => GetRecipeResource::make($recipe),
            ]
        ]);
    }


    public function searchRecipes(Request $request){
        Inertia::version('new'.Carbon::now());

        $request['maxReadyTime'] = $request['hour']*60 + $request['minute'];
        $recipes = RecipeController::search($request);
        if ($recipes){
            return Inertia::render('FilterSearch', [
                'data' => [
                    'recipes' => RandomRecipesResource::collection($recipes)
                ]
            ]);
        }else{

            return Inertia::render('FilterSearch', [
                'data' => [
                    'recipes' => $recipes,
                ]
            ]);
        }
    }
    public function searchRand(Request $request){
        Inertia::version('new'.Carbon::now());
        $randrecipes = Recipe::inRandomOrder()->paginate(15);
        $recipes = RandomRecipesResource::collection($randrecipes);
        return Inertia::render('FilterSearch', [
            'data' => [
                'recipes' => $recipes,
            ]
        ]);
    }

    public function addRecipe(Request $request) {
        // dd($request->getContent());

        return Inertia::render('ViewRecipe', [
            'data' => [
                'recipe' => json_decode($request->getContent(), true),
            ]
        ]);}


        public function getCategory(Request $request){
            $number = 12;
            $categoryId = $request->category_id;

            $recipes = Recipe::getCategory($categoryId, $number);
            Inertia::version('new'.Carbon::now());

            return Inertia::render('FilterSearch', [
                'data' => [
                    'recipes' => RandomRecipesResource::collection($recipes),
                ]
            ]);
        }



    }



