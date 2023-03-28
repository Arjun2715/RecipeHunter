<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecipeRequest;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Recipe;

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
        $ingredients = $recipe->ingredients();
        $steps = $recipe->steps();
        return ['recipe' => $recipe, 'ingredients' => $ingredients, 'steps' => $steps];
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
}
