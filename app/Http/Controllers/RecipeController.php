<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecipeRequest;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Http\Resources\MostViewedResource;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\RecipeIngredient;
use App\Models\SavedRecipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateRecipeRequest $request)
    {
        $data = $request->all();
        $recipe = Recipe::create($data);

        foreach ($data['categories'] as $category) {
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

        foreach ($data['cuisines'] as $cuisine) {
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


        foreach ($data['ingredients'] as $ingredientData) {
            $recipe->ingredients()->create([
                'name' => $ingredientData['name'],
                'quantity' => $ingredientData['quantity'],
            ]);
        }

        foreach ($data['steps'] as $stepData) {
            $recipe->steps()->create([
                'description' => $stepData['description'],
                'order_step' => $stepData['order_step'],
            ]);
        }
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


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        $ingredients = $recipe->ingredients()->get();
        $steps = $recipe->steps()->get();
        $ratings = $recipe->ratings()->get();
        return ['recipe' => $recipe, 'ingredients' => $ingredients, 'steps' => $steps, 'ratings' => $ratings];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
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
        $cuisine = "peru";
        $apiKey = "f5750ea5b4604d01bbb15645a66fcf45";
        $url = "https://api.spoonacular.com/recipes/complexSearch?cuisine=" . $cuisine . "&number=100&apiKey=" . $apiKey . "&instructionsRequired=true&fillIngredients=true&addRecipeInformation=true&addRecipeNutrition=true";
        $response = Http::get($url);
        if ($response->ok()) {
            $data = $response->json();
            foreach ($data['results'] as $data) {
                $title = $data['title'];
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
                if (!$data['analyzedInstructions'][0]) {
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

                    foreach ($categories as $category) {
                        $category_id = Category::where('name', '=', $category)->first();
                        if (!$category_id) {
                            $category_id = Category::create([
                                'name' => $category
                            ]);
                        }
                        $recipe->categories()->create([
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
        return "todo ok jose mari";
    }

    public function recommendations()
    {
        /* 
        $data = $request->all();
        $userId = $data['user_id'];
        $savedRecipes = SavedRecipes::where('user_id', $userId)->pluck('recipe_id');
        $mostSavedCategory = Recipe::whereIn('id', $savedRecipes)
            ->groupBy('category_id')
            ->selectRaw('category_id, COUNT(*) as total')
            ->orderByDesc('total')
            ->first();

        $mostSavedCuisine = Recipe::whereIn('id', $savedRecipes)
            ->groupBy('cuisine_id')
            ->selectRaw('cuisine_id, COUNT(*) as total')
            ->orderByDesc('total')
            ->first();


        $recommendedRecipes = Recipe::where('category_id', $mostSavedCategory->category_id)
            ->orWhere('cuisine_id', $mostSavedCuisine->cuisine_id)
            ->orderByDesc('created_at')
            ->limit(5)
            ->get();
        */

        $recipes = Recipe::inRandomOrder()->limit(15)->get();
        return $recipes;
    }


    public function recentlyUpdatedRecipes()
    {
        $recipes = Recipe::orderBy('created_at', 'desc')->take(6)->get();
        return $recipes;
    }

    public function mostViewed(){
        $recipesDay = Recipe::inRandomOrder()->limit(15)->get();
        $recipesWeek = Recipe::inRandomOrder()->limit(15)->get();
        $recipesMonth = Recipe::inRandomOrder()->limit(15)->get();

        return [
                'day' => MostViewedResource::collection($recipesDay), 
                'week' => MostViewedResource::collection($recipesWeek), 
                'month' => MostViewedResource::collection($recipesMonth)
               ];
    }

    public function search(Request $request){
        return $ingredients = RecipeIngredient::nameDoesNotIncludeNumber()->get()->pluck('name');

          $data = $request->all();
        $apiKey = "f5750ea5b4604d01bbb15645a66fcf45";
        $url = "https://api.spoonacular.com/recipes/complexSearch?&number=6&apiKey=" . $apiKey . "&instructionsRequired=true&fillIngredients=true&addRecipeInformation=true&addRecipeNutrition=true";
        $cuisine = $data['cuisine'];
        $diet = $data['diet'];
        $ingredients = $data['ingredients'];
        $maxReadyTime = $data['maxReadyTime'];
        $sort = $data['sort'];
        $query = $data['query'];
        if ($cuisine){
            $url = $url . "&cuisine=";
                $url.= $cuisine;
        }
        if ($ingredients){
            $url = $url . "&ingredients=";
            foreach ($ingredients as $ingredient){
                $url.= $ingredient.",";
            }
        }
        if($diet){
            $url = $url . "&diet=".$diet;
        }
        if($maxReadyTime){
            $url = $url . "&maxReadyTime=".$maxReadyTime;
        }
        if($query){
            $url = $url . "&query=".$query;
        }
        if($sort){
            $url = $url . "&sort=".$sort;
        }
        $response = Http::get($url);
        if ($response->ok()) {
            $data = $response->json();
            foreach ($data['results'] as $data) {
                $title = $data['title'];
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
                if (!$data['analyzedInstructions'][0]) {
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
                    
                    foreach ($categories as $category) {
                        $category_id = Category::where('name', '=', $category)->first();
                        if (!$category_id) {
                            $category_id = Category::create([
                                'name' => $category
                            ]);
                        }
                        $recipe->categories()->create([
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
        

    }
}
