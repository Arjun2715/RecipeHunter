<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\WebController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/home', [WebController::class,'home'])->name('home');
Route::get('/categories', [WebController::class,'categories'])->name('categories');

Route::get('/category', [WebController::class,'getCategory'])->name('getCategory');


Route::get('/filter', [WebController::class,'searchRand'])->name('filter');
Route::post('/filter', [WebController::class,'searchRecipes'])->name('filtersearch');

Route::get('/myrecipes', function () { return Inertia::render('MyRecipes', []);})->name('myrecipes');

Route::get('/newrecipe',  [WebController::class,'renderAddRecipe'] )->name('newrecipe');
Route::post('/newrecipe',  [WebController::class,'addRecipe']);


Route::post('/newrecipepost', [WebController::class,'addRecipe'])->name('newrecipepost');

Route::get('/viewrecipe',[WebController::class, 'getRecipe'])->name('viewrecipe');

/* hla */

Route::get('/savedrecipes', function () {
    return Inertia::render('SavedRecipes', []);
})->name('savedrecipes');
Route::get('/aboutus', function () {
    return Inertia::render('AboutUs', []);
})->name('aboutus');
Route::get('/contactus', function () {
    return Inertia::render('ContactUs', []);
})->name('contactus');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', []);
})->name('dashboard');
Route::get('/account', function () {
    return Inertia::render('Account', []);
})->name('account');
Route::get('/password', function () {
    return Inertia::render('Password', []);
})->name('password');
Route::get('/email', function () {
    return Inertia::render('Email', []);
})->name('email');
Route::get('/notifications', function () {
    return Inertia::render('Notifications', []);
})->name('notifications');
Route::get('/logoutdash', function () {
    return Inertia::render('Logoutdash', []);
})->name('logoutdash');

Route::get('/login', function () {
    return Inertia::render('Login', []);
})->name('login');

Route::get('/register', function () {
    return Inertia::render('Register', []);
})->name('register');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return redirect()->to('home');
    });
});


Route::get('/auth', [RecipeController::class,'authenticate']);
Route::get('/callback', [RecipeController::class,'callback']);
