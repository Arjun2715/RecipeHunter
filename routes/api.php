<?php

use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\RecipeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::post('/login', [ApiAuthController::class,'login'])->name('login.api');
    Route::post('/register', [ApiAuthController::class,'register'])->name('register.api');

Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::post('/recipe/create', [RecipeController::class,'create'])->name('recipe.create.api');

    Route::post('/logout', [ApiAuthController::class,'logout'])->name('logout.api');
});
