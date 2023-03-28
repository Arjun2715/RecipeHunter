<?php

use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SavedRecipesController;
use App\Models\SavedRecipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/login', [ApiAuthController::class,'login'])->name('login.api');
Route::post('/register', [ApiAuthController::class,'register'])->name('register.api');

Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::post('/recipe/create', [RecipeController::class,'create']);
    Route::post('/recipe/delete/{recipe}', [RecipeController::class,'destroy']);
    Route::get('/recipe/show/{recipe}', [RecipeController::class,'show']);
    //Saved recipes
    Route::post('/recipe/saved/create', [SavedRecipesController::class,'store']);
    Route::post('/recipe/saved/delete/{savedRecipe}', [SavedRecipesController::class,'destroy']);
    Route::get('/user/{user}/saved-recipes', [SavedRecipesController::class,'show']);


    Route::post('/logout', [ApiAuthController::class,'logout'])->name('logout.api');
});
