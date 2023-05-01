<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecipeRequest;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Http\Resources\MostViewedResource;
use App\Http\Resources\RandomRecipesResource;
use App\Http\Resources\RecentlyUpdatedResource;
use Google\Service\Customsearch;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\RecipeIngredient;
use App\Models\SavedRecipes;
use Google\Service\CustomSearchAPI;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Google_Client;
use Google_Service_Customsearch;


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
        $recipes = Recipe::inRandomOrder()->limit(6)->get();
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
        info($url);

        if (!$recipes) {
            return false;
        }
        $idlist = [];
        // aqui hay que cojer los ids de cada receta, hacer un eloquent que me de toda las rectas Recipe::where id = 5,7,8 y luego hacer la collection
        foreach($recipes as $recipe){
            array_push($idlist, $recipe->id);
        }
        $recipes = Recipe::whereIn('id',$idlist)->get();
        return $recipes;
    }

    public static function processSpoonacularResponse($url)
    {
        $response = Http::get($url);
        $recipes = [];
        if ($response->ok()) {
            $data = $response->json();
            foreach ($data['results'] as $data) {
                $title = $data['title'];
                $recipeExists = Recipe::where('title', $title)->first();
                if ($recipeExists) {
                    array_push($recipes, $recipeExists);
                } else {
                    $description = $data['summary'];
                    $description = str_replace(array('<b>', '</b>'), '', $description);
                    $author = $data['creditsText'];
                    $image = $data['image'];
                    $image = str_replace('312x231', '556x370', $image);
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
                        $recipe->saveImageInDatabase();
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

                            $recipe->recipeCuisines()->create([
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
        $apiKey = "c15d413955f34a3b9912aa100b74435d";
        $url = "https://api.spoonacular.com/recipes/complexSearch?&number=12&apiKey=" . $apiKey . "&instructionsRequired=true&fillIngredients=true&addRecipeInformation=true&addRecipeNutrition=true";
        $cuisines = $data['cuisines'];
        $diets = $data['diets'];
        $ingredients = $data['ingredients'];
        $maxReadyTime = $data['maxReadyTime'];
        $sorts = $data['sort'];
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
        if ($sorts) {
            $url = $url . "&sort=";
            foreach ($sorts as $sort) {
                $url .= $sort . ",";
            }

        }
        return $url;
    }

    // ...

    public function authenticate()
    {
        $client = new Google_Client();
        $client->setClientId('1057574010832-vv1km4dr5nghu4b9ec4e3gg3jcp9f4qo.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('http://localhost:8000/callback');
        $client->setAccessType('offline');
        $client->setScopes(['https://www.googleapis.com/auth/cse']);
        if (isset($_GET['code'])) {
            $client->fetchAccessTokenWithAuthCode($_GET['code']);
            $accessToken = $client->getAccessToken();
            session(['access_token' => $accessToken]);
        } else {
            $authUrl = $client->createAuthUrl();
            return redirect()->to($authUrl);
        }
    }

    public function callback()
    {
        $client = new Google_Client();
        $client->setClientId('1057574010832-vv1km4dr5nghu4b9ec4e3gg3jcp9f4qo.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('http://localhost:8000/callback');
        return $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $accessToken = $client->getAccessToken();
        session(['access_token' => $accessToken]);
    }
    public function updateImages()
    {
        // Get the access token from the session
        // Create a Google_Client instance and set the access token
        $client = new Google_Client();
        $client->setAccessToken("ya29.a0AWY7CkmeDdn1qv1X0LrojZVN8GkEBpauYqmLMRh8Phegqavrb4mNRyY0yapx2bZ4oiskYT6xeRUCdTnUNRfy1zvouSL2Ye7V447ZteGsMGN1f9Rqzr3h0Fk50SDOFPXLMmtAxRfwuhWdhnmzzqRBU0Wf8h_OaCgYKASwSARISFQG1tDrphHJxKUlD_f3Ft9xjZWbLrQ0163"); // Set the access token you saved earlier

        // Create a Google_Service_Customsearch instance
        $customSearch = new CustomSearchAPI($client);

        // Get all recipes from the database
        $recipes = Recipe::where('id', '>=', 1378)
        ->get();
        // Loop through each recipe and update its image
        foreach ($recipes as $recipe) {
            $query = $recipe->title; // Use the recipe title as the search query
            $params = [
                'q' => $query,
                'searchType' => 'image',
                'imgSize' => 'xlarge',
                'num' => 1,
                'cx' => 'f1f1ed734a8f641ee'
            ];
            $results = $customSearch->cse->listCse($params);

            // Check if there are any search results
            if (count($results->getItems()) > 0) {
                // Get the first search result and save its image URL to the recipe
                $imageUrl = $results->getItems()[0]->getLink();
                $recipe->image = $imageUrl;
                $recipe->save();
            }
        }

        // Return a response indicating that the images have been updated
        return response()->json(['message' => 'Recipe images have been updated.']);
    }

}
