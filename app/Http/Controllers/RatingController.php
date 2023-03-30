<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRatingRequest;
use App\Http\Requests\UpdateRatingRequest;
use App\Models\Rating;
use App\Models\Recipe;
use Illuminate\Http\Client\Request;

class RatingController extends Controller
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'recipe_id' => 'required|exists:recipes,id',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $rating = Rating::create($validatedData);

        return response()->json([
            'message' => 'Rating created successfully',
            'data' => $rating,
        ]);
    }
    public function getRatingMean(Recipe $recipe)
    {
        return response()->json([
            'rating_mean' => $recipe->ratingMean(),
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRatingRequest $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
