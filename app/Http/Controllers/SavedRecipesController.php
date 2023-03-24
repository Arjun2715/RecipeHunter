<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSavedRecipesRequest;
use App\Http\Requests\UpdateSavedRecipesRequest;
use App\Models\SavedRecipes;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSavedRecipesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SavedRecipes $savedRecipes)
    {
        //
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
        //
    }
}
