<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPreferenceRequest;
use App\Http\Requests\UpdateUserPreferenceRequest;
use App\Models\UserPreference;

class UserPreferenceController extends Controller
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
    public function store(StoreUserPreferenceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserPreference $userPreference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserPreference $userPreference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserPreferenceRequest $request, UserPreference $userPreference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserPreference $userPreference)
    {
        //
    }
}
