<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSavedRecipesRequest;
use App\Http\Requests\UpdateSavedRecipesRequest;
use App\Models\SavedRecipes;
use App\Models\User;
use Illuminate\Http\Request;

class SavedRecipesController extends Controller
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
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSavedRecipesRequest $request)
    {
        $data = $request->all();
        $recipe = SavedRecipes::create($data);
        return $recipe;
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        if ($user){
            if ($user->recipes){
                return $user->recipes;
            }
            return response()->json(['Error retrieving recipes.'], 500);
        }
        return response()->json(['Error retrieving recipes.'], 500);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SavedRecipes $savedRecipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSavedRecipesRequest $request, SavedRecipes $savedRecipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SavedRecipes $savedRecipes)
    {
        if ($savedRecipes->delete()) {
            return response()->json(['Saved recipe deleted successfully.']);
        }
        return response()->json(['Error deleting recipe.'], 500);
    }
}
