<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecipeRequest;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Http\Resources\MostViewedResource;
use App\Http\Resources\RandomRecipesResource;
use App\Http\Resources\RecentlyUpdatedResource;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\RecipeIngredient;
use App\Models\SavedRecipes;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{
    public function create(CreateRecipeRequest $request)
    {
        $data = $request->all();
        $recipe = Recipe::createRecipe($data);
        return $recipe;
    }

    public function bestRatedRecipes($period)
    {
        $periodStart = now()->startOf($period);
        $periodEnd = now()->endOf($period);

        $recipes = Recipe::withCount(['ratings as rating_average' => function ($query) use ($periodStart, $periodEnd) {
            $query->select(DB::raw('coalesce(avg(rating),0)'))
                ->whereBetween('created_at', [$periodStart, $periodEnd]);
        }])
            ->orderByDesc('rating_average')
            ->limit(10)
            ->get();

        return response()->json([
            'data' => $recipes,
        ]);
    }

    public function show(Recipe $recipe)
    {
        $ingredients = $recipe->ingredients()->get();
        $steps = $recipe->steps()->get();
        $ratings = $recipe->ratings()->get();
        return ['recipe' => $recipe, 'ingredients' => $ingredients, 'steps' => $steps, 'ratings' => $ratings];
    }

    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        $recipe->fill($request->only([
            'user_id',
            'author',
            'title',
            'category_id',
            'cuisine_id',
            'diet_id',
            'description',
            'nutrition_facts',
            'image'
        ]));

        $recipe->save();

        return response()->json(['message' => 'Recipe updated successfully']);
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->ingredients()->delete();
        $recipe->steps()->delete();
        $recipe->delete();
        $response = ['message' => 'You have been successfully deleted the recipe!'];
        return response($response, 200);
    }
    
    public function storeSpoonacularRecipes()
    {
        $cuisine = "arabic";

        $apiKey = "f5750ea5b4604d01bbb15645a66fcf45";
        $url = "https://api.spoonacular.com/recipes/complexSearch?cuisine=" . $cuisine . "&number=100&apiKey=" . $apiKey . "&instructionsRequired=true&fillIngredients=true&addRecipeInformation=true&addRecipeNutrition=true";
        
        $recipes = RecipeController::processSpoonacularResponse($url);
        return count($recipes);
    }

    public function recommendations()
    {
        $recipes = Recipe::inRandomOrder()->limit(15)->get();
        return $recipes;
    }


    public function recentlyUpdatedRecipes()
    {
        $recipes = Recipe::orderBy('created_at', 'desc')->take(6)->get();
        return $recipes;
    }

    public function mostViewed()
    {
        $recipesDay = Recipe::inRandomOrder()->limit(15)->get();
        $recipesWeek = Recipe::inRandomOrder()->limit(15)->get();
        $recipesMonth = Recipe::inRandomOrder()->limit(15)->get();

        return [
            'day' => MostViewedResource::collection($recipesDay),
            'week' => MostViewedResource::collection($recipesWeek),
            'month' => MostViewedResource::collection($recipesMonth)
        ];
    }


    public static function search(Request $request)
    {
        $url = RecipeController::buildUrl($request->all());
        $recipes = RecipeController::processSpoonacularResponse($url);
        if (!$recipes) {
            return false;
        }

        
        return RandomRecipesResource::collection($recipes);
    }

    public static function processSpoonacularResponse($url)
    {
        $response = Http::get($url);
        $recipes = [];
        if ($response->ok()) {
            $data = $response->json();
            foreach ($data['results'] as $data) {
                $title = $data['title'];
                $recipeExists = DB::table('recipes')
                ->where('title', '=', $title)
                ->first();
                if ($recipeExists) {
                    array_push($recipes, $recipeExists);
                } else {
                    $description = $data['summary'];
                    $author = $data['creditsText'];
                    $image = $data['image'];
                    $prepTime = $data['readyInMinutes'];
                    $cookTime = $data['cookingMinutes'];
                    $servings = $data['servings'];
                    $provisional = $data['nutrition']['nutrients'];
                    $nutriFacts = $provisional[0]['name'] . ': ' . $provisional[0]['amount'] . " " . $provisional[0]['unit'] . "\r\n" . $provisional[1]['name'] . ': ' . $provisional[1]['amount'] . " " . $provisional[1]['unit'] . "\r\n" . $provisional[2]['name'] . ': ' . $provisional[2]['amount'] . " " . $provisional[2]['unit'] . "\r\n" . $provisional[3]['name'] . ': ' . $provisional[3]['amount'] . " " . $provisional[3]['unit'] . "\r\n" . $provisional[4]['name'] . ': ' . $provisional[4]['amount'] . " " . $provisional[4]['unit'] . "\r\n" . $provisional[5]['name'] . ': ' . $provisional[5]['amount'] . " " . $provisional[5]['unit'] . "\r\n" . $provisional[6]['name'] . ': ' . $provisional[6]['amount'] . " " . $provisional[6]['unit'] . "\r\n" . $provisional[7]['name'] . ': ' . $provisional[7]['amount'] . " " . $provisional[7]['unit'] . "\r\n" . $provisional[8]['name'] . ': ' . $provisional[8]['amount'] . " " . $provisional[8]['unit'];
                    $cuisines = $data['cuisines'];
                    $categories = $data['dishTypes'];
                    if (!$data['analyzedInstructions']) {
                    } else {
                        $instructions = $data['analyzedInstructions'][0]['steps'];
                        $ingredients = $data['extendedIngredients'];
                        $recipe = Recipe::create(
                            [
                                'title' => $title,
                                'description' => $description,
                                'author' => $author,
                                'image' => $image,
                                'prep_time' => $prepTime,
                                'cook_time' => $cookTime,
                                'nutrition_facts' => $nutriFacts,
                                'user_id' => 1,
                                'servings' => $servings,
                            ]
                        );
                        array_push($recipes, $recipe);
                        foreach ($categories as $category) {
                            $category_id = Category::where('name', '=', $category)->first();
                            if (!$category_id) {
                                $category_id = Category::create([
                                    'name' => $category
                                ]);
                            }
                            $recipe->recipeCategories()->create([
                                'category_id' => $category_id->id,
                            ]);
                        }

                        foreach ($cuisines as $cuisine) {
                            $cuisine_id = Cuisine::where('name', '=', $cuisine)->first();
                            if (!$cuisine_id) {
                                $cuisine_id = Cuisine::create([
                                    'name' => $cuisine
                                ]);
                            }

                            $recipe->cuisines()->create([
                                'cuisine_id' => $cuisine_id->id,
                            ]);
                        }


                        foreach ($ingredients as $ingredientData) {
                            $recipe->ingredients()->create([
                                'name' => $ingredientData['original'],
                                'quantity' => $ingredientData['amount'] . " " . $ingredientData['unit'],
                            ]);
                        }

                        foreach ($instructions as $stepData) {
                            $recipe->steps()->create([
                                'description' => $stepData['step'],
                                'order_step' => $stepData['number'],
                            ]);
                        }
                    }
                }
            }
        } else {
            return false;
        }
        return $recipes;
    }


    public static function buildUrl($data)
    {
        $apiKey = "f5750ea5b4604d01bbb15645a66fcf45";
        $url = "https://api.spoonacular.com/recipes/complexSearch?&number=6&apiKey=" . $apiKey . "&instructionsRequired=true&fillIngredients=true&addRecipeInformation=true&addRecipeNutrition=true";
        $cuisines = $data['cuisines'];
        $diets = $data['diets'];
        $ingredients = $data['ingredients'];
        $maxReadyTime = $data['maxReadyTime'];
        $sort = $data['sort'];
        $query = $data['query'];
        if ($cuisines) {
            $url = $url . "&cuisine=";
            foreach ($cuisines as $cuisine) {
                $url .= $cuisine . ",";
            }
        }
        if ($ingredients) {
            $url = $url . "&ingredients=";
            foreach ($ingredients as $ingredient) {
                $url .= $ingredient . ",";
            }
        }
        if ($diets) {
            $url = $url . "&diet=";
            foreach ($diets as $diet) {
                $url .= $diet . ",";
            }
        }
        if ($maxReadyTime) {
            $url = $url . "&maxReadyTime=" . $maxReadyTime;
        }
        if ($query) {
            $url = $url . "&query=" . $query;
        }
        if ($sort) {
            $url = $url . "&sort=" . $sort;
        }
        return $url;
    }


}
