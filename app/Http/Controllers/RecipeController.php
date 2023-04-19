<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecipeRequest;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Recipe;
use App\Models\SavedRecipes;
use Illuminate\Http\Client\Request;
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



  


    public function storeSpoonacularRecipes(){
        $cuisine = "italian";
        $apiKey = "f5750ea5b4604d01bbb15645a66fcf45";
        $url = "https://api.spoonacular.com/recipes/complexSearch?cuisine=".$cuisine."&number=1&apiKey=".$apiKey."&instructionsRequired=true&fillIngredients=true&addRecipeInformation=true&addRecipeNutrition=true";
        $response = Http::get($url);
        if ($response->ok()) {
            $data = $response->json();
            $data = $data['results'][0];
            $title = $data['title'];
            $description = $data['summary'];
            $author = $data['creditsText'];
            $image = $data['image'];
            $prepTime= $data['readyInMinutes'];
            $servings = $data['servings'];
            $provisional = $data['nutrition']['nutrients'];
            $nutriFacts = $provisional[0]['name'].': '.$provisional[0]['amount']." ".$provisional[0]['unit']."\r\n".$provisional[1]['name'].': '.$provisional[1]['amount']." ".$provisional[1]['unit']."\r\n".$provisional[2]['name'].': '.$provisional[2]['amount']." ".$provisional[2]['unit']."\r\n".$provisional[3]['name'].': '.$provisional[3]['amount']." ".$provisional[3]['unit']."\r\n".$provisional[4]['name'].': '.$provisional[4]['amount']." ".$provisional[4]['unit']."\r\n".$provisional[5]['name'].': '.$provisional[5]['amount']." ".$provisional[5]['unit']."\r\n".$provisional[6]['name'].': '.$provisional[6]['amount']." ".$provisional[6]['unit']."\r\n".$provisional[7]['name'].': '.$provisional[7]['amount']." ".$provisional[7]['unit']."\r\n".$provisional[8]['name'].': '.$provisional[8]['amount']." ".$provisional[8]['unit'];
            $cuisines = $data['cuisines'];
            $categories = $data['dishTypes'];
            $instructions = $data['analyzedInstructions'];
            
        } else {
            // Handle the error
        }
    }

    public function recommendations(Request $request)
    {
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

        $mostSavedDiet = Recipe::whereIn('id', $savedRecipes)
            ->groupBy('diet_id')
            ->selectRaw('diet_id, COUNT(*) as total')
            ->orderByDesc('total')
            ->first();

        $recommendedRecipes = Recipe::where('category_id', $mostSavedCategory->category_id)
            ->orWhere('cuisine_id', $mostSavedCuisine->cuisine_id)
            ->orWhere('diet_id', $mostSavedDiet->diet_id)
            ->orderByDesc('created_at')
            ->limit(5)
            ->get();

        return response()->json([
            'data' => $recommendedRecipes,
        ]);
    }
}
