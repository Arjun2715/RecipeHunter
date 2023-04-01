<?php

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

// Route::get('/', function () {
//     return Inertia::render('Index', [
//         // 'articles' => Article::latest()->get()
//     ]);
// })->name('home');

Route::get('/login', function () { return Inertia::render('Login', []);})->name('login');

Route::get('/register', function () { return Inertia::render('Register', []);})->name('register');



Route::middleware('auth:web')->group(function () {
    Route::get('/', function () { return Inertia::render('Show', []);});
});
