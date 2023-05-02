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
use App\Models\SavedRecipes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class WebController extends Controller
{


    public function home()
    {

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

    public function categories()
    {
        $Categories = Category::all();
        foreach ($Categories as $category) {
            $category->image = url($category->image);
        }

        return Inertia::render('Categories', [
            'data' => [
                'categories' => $Categories,
            ]
        ]);
    }

    public static function getRecipe(Request $request)
    {
        Inertia::version('new' . Carbon::now());
        $recipe_id = $request->recipeId;
        $recipe = Recipe::find($recipe_id);
        return Inertia::render('ViewRecipe', [
            'data' => [
                'recipe' => GetRecipeResource::make($recipe),
            ]
        ]);
    }


    public function searchRecipes(Request $request)
    {
        Inertia::version('new' . Carbon::now());

        $request['maxReadyTime'] = $request['hour'] * 60 + $request['minute'];
        $recipes = RecipeController::search($request);
        if ($recipes) {
            return Inertia::render('FilterSearch', [
                'data' => [
                    'recipes' => RandomRecipesResource::collection($recipes)
                ]
            ]);
        } else {

            return Inertia::render('FilterSearch', [
                'data' => [
                    'recipes' => $recipes,
                ]
            ]);
        }
    }
    public function searchRand(Request $request)
    {
        Inertia::version('new' . Carbon::now());
        $randrecipes = Recipe::inRandomOrder()->paginate(15);
        $recipes = RandomRecipesResource::collection($randrecipes);
        return Inertia::render('FilterSearch', [
            'data' => [
                'recipes' => $recipes,
            ]
        ]);
    }

    public function renderAddRecipe()
    {
        // dd($request->getContent());
        return Inertia::render('AddNewRecipe', []);
    }

    public function addRecipe(Request $request)
    {
        $data = $request->all();
        $prepTime = $data['prepTimeMinutes'] + 60 * $data['prepTimeHours'];
        $cookTime = $data['cookTimeMinutes'] + 60 * $data['cookTimeHours'];
        $instructions = $data['instructions'];
        $ingredients = $data['ingredients'];

        foreach ($ingredients as $key => $ingredient) {
            $ingredients[$key] = [
                "name" => $ingredient,
                "quantity" => 0,
            ];
        }

        foreach ($instructions as $key => $instruction) {
            $instructions[$key] = [
                "description" => $instruction,
                "order_step" => $key + 1,
            ];
        }


        $recipeData = [
            'user_id' => auth()->user()->id,
            'author' => auth()->user()->name,
            'title' => $data['name'],
            'cuisines' => [$data['cuisine']],
            'categories' => [],
            'description' => $data['description'],
            'nutrition_facts' => null,
            'image' => 'https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/All-American-Hamburgers_EXPS_CWAS22_29321_P2_MD_04_19_1b_v2.jpg',
            'servings' => 0,
            'prep_time' => $prepTime,
            'cook_time' => $cookTime,
            'steps' => $instructions,
            'ingredients' => $ingredients,
        ];
        $recipe = Recipe::createRecipe($recipeData);
        $request = new Request(['recipeId' => $recipe->id]);
        return WebController::getRecipe($request);
    }
    /* 
    name: Name,
    description: Description,
    ingredients: Ingredients,
    instructions: Instructions,
    prepTimeMinutes: PrepTimeMinutes,
    prepTimeHours: PrepTimeHours,
    cookTimeHours: CookTimeHours,
    cookTimeMinutes: CookTimeMinutes,
    imagePath: ImagePath,
    diet: Diet,
    cuisine: Cuisine,
*/
    public function getCategory(Request $request)
    {
        $number = 12;
        $categoryId = $request->category_id;

        $recipes = Recipe::getCategory($categoryId, $number);
        Inertia::version('new' . Carbon::now());

        return Inertia::render('FilterSearch', [
            'data' => [
                'recipes' => RandomRecipesResource::collection($recipes),
            ]
        ]);
    }


    public function savedRecipes()
    {
        $user = Auth::user();
        $savedRecipes = SavedRecipes::where('user_id', $user->id)->get();
        // Next, create an empty array to hold the recipe models
        $recipes = [];

        // Loop through the saved recipes and add the corresponding recipe model to the array
        foreach ($savedRecipes as $savedRecipe) {
            $recipe = Recipe::find($savedRecipe->recipe_id);
            $recipes[] = $recipe;
        }
        $collection = collect($recipes);
        $recipes = RandomRecipesResource::collection($collection);
        return Inertia::render('SavedRecipes', [
            'data' => [
                'recipes' => $recipes,
            ]
        ]);
    }
}
