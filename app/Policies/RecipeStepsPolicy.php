<?php

namespace App\Policies;

use App\Models\RecipeSteps;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RecipeStepsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, RecipeSteps $recipeSteps): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, RecipeSteps $recipeSteps): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, RecipeSteps $recipeSteps): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, RecipeSteps $recipeSteps): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, RecipeSteps $recipeSteps): bool
    {
        //
    }
}
